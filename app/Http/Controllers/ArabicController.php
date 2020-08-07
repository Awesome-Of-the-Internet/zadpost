<?php

namespace App\Http\Controllers;

use App\News;
class ArabicController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(News $posts)
    {
        return view('pages.arabic' , compact('posts'));
    }

}
