<?php

namespace App\Http\Controllers;

use App\News;


class IsraelController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(News $posts)
    {
        return view('pages.Epre' , compact('posts'));
    }

}
