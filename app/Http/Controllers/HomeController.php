<?php

namespace App\Http\Controllers;

use App\News;
use App\YoutupeVideo;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');

    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
     public function index(News $posts)
    {

        $YoutupeVideo = YoutupeVideo::all();

        return view('home' , compact('posts' , 'YoutupeVideo'));

    }
}
