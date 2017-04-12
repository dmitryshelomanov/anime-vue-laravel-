<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\anime_series;
use Validator;

class SeriesController extends Controller
{
    public function addSeries (Request $request) {
        $validator = Validator::make($request->all(), [
            'link' => 'required',
            'series_number' => 'required'
        ]);

        if ($validator->fails() ) {
            return redirect()->back()->with('message', 'Все поля обязательны к заполнению !');
        }
        $insert = anime_series::insert([
            'link' => $request->link,
            'number' => $request->series_number,
            'anime_id' => $request->id
        ]);
        if ($insert) {
            return redirect()->back();
        }
        return redirect()->back()->with('message', 'Извените не удалось ввести данные :(');
    }
    public function removeSeries (Request $request) {
        $delete = anime_series::where('id', '=', $request->id)->delete();
        if ($delete) {
            return redirect()->back();
        }
        return redirect()->back()->with('message', 'Извените не удалось удалить серию :(');
    }
    public function updateSeries (Request $request) {
        $update = anime_series::where('id', '=', $request->id)
                            ->update([
                                'link' => $request->link,
                                'number' => $request->series_number,
                            ]);
        if ($update) {
            return redirect()->back();
        }
        return redirect()->back()->with('message', 'Извените не удалось обновить :(');
    }
}
