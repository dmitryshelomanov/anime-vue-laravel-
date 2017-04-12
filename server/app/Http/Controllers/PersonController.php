<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Person;
use App\Models\Admin\UploadImage;
use Validator;

class PersonController extends Controller
{
    public function getPersons () {
        $data = Person::simplePaginate(15);
        return response()->json($data);
    }
    public function getPersonById (Request $request) {
        $data = Person::where('id', '=', $request->id)
                        ->with(['anime' => function ($query) {
                            $query->with('person');
                        }])
                        ->get();
        return response()->json($data);
    }
    /**
     * Добавление героя
     * @return $this
     */
    public function addPerson(Request $request)
    {
        $validator = Validator::make(request()->all(), [
            'name' => 'required',
            'description' => 'required',
            'text' => 'required',
            'anime_id' => 'required',
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
            'path' => 'img/persona/',
            'is_update' => false,
            'table' => 'person',
        ]);

        if (!$upload) {
            return redirect()
                ->back()
                ->withInput()
                ->with('message', 'Данный файл не является изображением ! (.png, .jpeg)');
        }
        Person::insert([
            'img' => $request->file('img')->getClientOriginalName(),
            'name' => $request->name,
            'description' => $request->description,
            'text' => $request->text,
            'anime_id' => $request->anime_id,
        ]);

        return redirect()
                ->back()
                ->withInput()
                ->with('success', ['success' => true]);
    }
    public function updatePersonPage(Request $request) {
        $data = Person::where('id', '=', $request->id)
                        ->with('anime')
                        ->first();
        return view('refactorePersone', ['data' => $data]);
    }
    public function updatePerson(Request $request) {
      $data =  Person::where('id', '=', $request->id)
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
    public function refactoreImg (Request $request) {
        if (!request()->hasFile('img')) {
            return redirect()->back()->with('message', 'Вы не выбрали файл !');
        }
        $upload = UploadImage::uploadAnimeImage([
            'img' => $request->file('img'),
            'path' => 'img/persona/',
            'is_update' => true,
            'table' => 'person',
            'id' => $request->id
        ]);
        if ($upload) {
            return redirect()->back();
        }
        return redirect()->back()->with('message', 'Данный файл не является изображением ! (.png, .jpeg)');
    }
    public function deletePerson(Request $request)
    {
        $delete = Person::where('id', '=', $request->id)->delete();
        if ($delete) {
            return redirect(route('home'))->with('deleted', true);
        }
        return redirect()->back()->with('message', 'Ошибка удаления :(');
    }
}
