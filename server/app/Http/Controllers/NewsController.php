<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\News;
use Validator;
use App\Models\Admin\UploadImage;

class NewsController extends Controller
{
    public function getNewById(Request $request) {
        $data = News::where('id', '=', $request->id)->first();
        return response()->json($data);
    }
    public function addNews (Request $request) {
        $validator = Validator::make(request()->all(), [
            'name' => 'required',
            'description' => 'required',
            'text' => 'required',
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
            'path' => 'img/news/',
            'is_update' => false,
            'table' => 'news',
        ]);

        if (!$upload) {
            return redirect()
                ->back()
                ->withInput()
                ->with('message', 'Данный файл не является изображением ! (.png, .jpeg)');
        }
        News::insert([
            'img' => $request->file('img')->getClientOriginalName(),
            'name' => $request->name,
            'description' => $request->description,
            'text' => $request->text,
        ]);

        return redirect()
            ->back()
            ->withInput()
            ->with('success', ['success' => true]);
    }
    public function getLastNews () {
        $data = News::all(['id', 'name', 'description', 'img'])->take(10);
        return response()->json($data);
    }
    public function deleteNews(Request $request)
    {
        $delete = News::where('id', '=', $request->id)->delete();
        if ($delete) {
            return redirect(route('home'))->with('deleted', true);
        }
        return redirect()->back()->with('message', 'Ошибка удаления :(');
    }
    public function updateNewsPage(Request $request) {
        $data = News::where('id', '=', $request->id)->first();
        return view('refactoreNews', ['data' => $data]);
    }
    public function updateNews(Request $request) {
        $data =  News::where('id', '=', $request->id)
                ->update([
                    'name' => $request->name,
                    'description' => $request->description,
                    'text' => $request->text,
                ]);
        if ($data) {
            return redirect()->back();
        }
        return redirect()->back()->with('message', 'Изменение не произошло :(');
    }
}
