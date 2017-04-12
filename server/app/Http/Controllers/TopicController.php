<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Topic;
use App\Models\Message;
class TopicController extends Controller
{
    public function getAllTopics()
    {
        return response()->json(
            Topic::with(['user' => function ($query) {
                $query->withCount('message')
                       ->withCount('topic');
            }])
                ->withCount('message')
                ->orderBy('created_at', 'desc')
                ->simplePaginate(15)
        );
    }
    public function getTopic()
    {
        return response()->json(
            Topic::where('id', '=', request()->id)
                    ->with('user')
                    ->withCount('message')
                    ->with(['message' => function ($query) {
                        $query->with(['user' => function ($query) {
                            $query->withCount('message')
                                   ->withCount('topic');
                        }]);
                    }])
                    ->simplePaginate()
        );
    }
    public function addPost()
    {
        $rs =  Message::insert([
                'user_id' => request()->user_id,
                'text' => request()->text,
                'topic_id' => request()->topic_id,
        ]);

        if ($rs)
            return response()->json(200);
        return response()->json(500);
    }
    public function createTopic() {
        $rs = Topic::insert([
            'user_id' => request()->user_id,
            'name' => request()->name,
            'text' => request()->text,
        ]);
        if ($rs)
            return response()->json(200);
        return response()->json(500);
    }
    public function dropMsg(Request $request)
    {
        $drop =  Message::where('id', '=', $request->id)->delete();
        if ($drop)
            return response()->json(200);
        return response()->json(500);
    }
    public function dropTopic(Request $request) {
        $drop =  Topic::where('id', '=', $request->id)
                        ->delete();

        if ($drop)
            return response()->json(200);
        return response()->json(500);
    }
}
