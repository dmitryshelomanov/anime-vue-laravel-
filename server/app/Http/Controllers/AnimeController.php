<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\anime;

class AnimeController extends Controller
{
    public function getAllAnime()
    {
        return response()->json(
            anime::simplePaginate(15)
        );
    }
    public function getAnimeById () {
        return response()->json(
            anime::where('id', '=', request()->id)
                    ->with(['comments' => function ($query) {
                        $query->orderBy('created_at', 'desc');
                        $query->with('user');
                    }])
                    ->with('series')
                    ->withCount('series')
                    ->get()
        );
    }
    public function getSimilar() {
        $data = explode(',', request()->str);
        return anime::where([
                    ['genre', 'LIKE', '%'. $data[0] .'%'],
                    ['id', '<>', request()->id]
                ])->limit(4)
                  ->get();
    }
    public function getAnimeByParam (Request $request, anime $anime) {
        switch ($request->type) {
            case 'жанр':
                return response()->json($anime->getAnimeByFilter('genre', $request->name));
                break;
            case 'тип':
                return response()->json($anime->getAnimeByFilter('type', $request->name));
                break;
            case 'год':
                return response()->json($anime->getAnimeByFilter('year', intval($request->name)));
                break;
        }
    }
}
