<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\anime;

class SearchController extends Controller
{
    /**
     * Поиск по базе
     */
    public function search(Request $request)
    {
        $data = anime::search($request->search);
        return view('search.anime', [
            'data' => $data,
            'search' => $request->search,
        ]);
    }
}
