<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\comments;

class CommentsController extends Controller
{
    public function getComment () {
        $comments =  comments::where('anime_id', '=', request()->id)
                                ->with('user')
                                ->orderBy('created_at', 'desc')
                                ->get();
       if (count($comments) === 0) {
           return response()->json(404);
       }
       return response()->json($comments);
    }
    public function addComment () {
        $rs = comments::create([
            'text' =>  request()->text,
            'user_id' =>  request()->user_id,
            'anime_id' =>  request()->anime_id
        ]);
        if ($rs)
            return response()->json(200);
        return response()->json(500);
    }
}
