<?php

namespace App\Http\Controllers;
use App\News;
use Illuminate\Http\Request;

class searchController extends Controller
{

       /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
   public function search(){

    $title = $_GET['searchinput'];
  

    $posts = News::where([ 
        ['title', 'LIKE', '%' . $title . '%'],
      
    ])->get();

    return view('pages.Search', compact('posts'));

   }
}
