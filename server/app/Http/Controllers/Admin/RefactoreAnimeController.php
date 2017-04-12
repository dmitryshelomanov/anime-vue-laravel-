<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Validator;
use App\Models\Admin\UploadImage;
use App\Models\anime;
use App\Models\menu;

class RefactoreAnimeController extends Controller
{
    /**
     * вывести страницу для изменения одного аниме
     * @param Anime $anime
     * @return вьюха
     */
    public function getRefactor(Anime $anime)
    {
        $data = anime::where('id', '=', request()->id)
                    ->with(['series' => function ($query) {
                        $query->orderby('id', 'desc');
                    }])
                    ->get();
        return view('refactoreAnime', [
            'anime' => $data[0],
            'type' => Menu::with('subMenu')->where('name', '=', 'тип')->get()[0],
            'year' => Menu::with('subMenu')->where('name', '=', 'год')->get()[0],
            'genre' => Menu::with('subMenu')->where('name', '=', 'жанр')->get()[0],
        ]);
    }

    /**
     * изменение аниме
     * @param Anime $anime
     * @return redirect
     */
    public function postRefactor(Request $request)
    {
        $update = anime::where('id', '=', $request->id)
                    ->update([
                        'name' => $request->name,
                        'description' => $request->description,
                        'text' => $request->text,
                        'genre' => $request->genre,
                        'year' => $request->year,
                        'series_all' => $request->series_all,
                        'time_series' => $request->time_series,
                    ]);
        return redirect()->back();
    }

    public function deleteAnime(Request $request)
    {
        $delete = anime::where('id', '=', $request->id)->delete();
        if ($delete) {
            return redirect(route('home'))->with('deleted', true);
        }
        return redirect()->back()->with('message', 'Ошибка удаления :(');
    }
    public function addAnimeIndex() {
        return view('addAnime', [
            'type' => Menu::with('subMenu')->where('name', '=', 'тип')->get()[0],
            'year' => Menu::with('subMenu')->where('name', '=', 'год')->get()[0],
            'genre' => Menu::with('subMenu')->where('name', '=', 'жанр')->get()[0],
        ]);
    }
    /**
     * Добавление аниме
     * @return $this
     */
    public function addAnime(Request $request)
    {
        $validator = Validator::make(request()->all(), [
            'name' => 'required',
            'description' => 'required',
            'text' => 'required',
            'type' => 'required',
            'genre' => 'required',
            'year' => 'required',
            'series_all' => 'required',
            'time_series' => 'required',
            'img' => 'required',
        ]);

        if ($validator->fails() ) {
            return redirect()
                ->back()
                ->with('message', 'Все поля обязательны к заполнению !')
                ->withInput();
        }
        $upload = UploadImage::uploadAnimeImage([
            'img' => $request->file('img'),
            'path' => 'img/anime/',
            'is_update' => false,
            'table' => 'anime',
        ]);

        if (!$upload) {
            return redirect()
                ->back()
                ->withInput()
                ->with('message', 'Данный файл не является изображением ! (.png, .jpeg)');
        }
        anime::insert([
            'img' => request()->file('img')->getClientOriginalName(),
            'name' => request()->name,
            'description' => request()->description,
            'text' => request()->text,
            'type' => request()->type,
            'genre' => request()->genre,
            'year' => request()->year,
            'series_all' => request()->series_all,
            'time_series' => request()->time_series,
        ]);

        return redirect()
                ->back()
                ->withInput()
                ->with('success', ['success' => true]);
    }

    /**
     * изменение кртинки для аниме
     */
    public function upload(Request $request)
    {
        if (!request()->hasFile('img')) {
            return redirect()->back()->with('message', 'Вы не выбрали файл !');
        }
        $upload = UploadImage::uploadAnimeImage([
            'img' => $request->file('img'),
            'path' => 'img/anime/',
            'is_update' => true,
            'table' => 'anime',
            'id' => $request->id
        ]);
        if ($upload) {
            return redirect()->back();
        }
        return redirect()->back()->with('message', 'Данный файл не является изображением ! (.png, .jpeg)');
    }
}
