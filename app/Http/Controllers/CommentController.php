<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\News;
use App\Comment;

class CommentController extends Controller
{
    public function index(News $News)
    {
        return $News->comments()->paginate(10);
    }

    public function show(Comment $comment)
    {
        return $comment->replies()->paginate(10);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */

    public function store(Request $request, News $News)
    {
        return auth()->user()->comments()->create([

            'body' => $request->body,
            'news_id' => $News->id,
            'comment_id' => $request->comment_id,
            

        ])->fresh();


    }
}
