<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\News;
use App\Viewers;
use Illuminate\Support\Facades\Auth;
class PostsShowController extends Controller
{
  
   
      /**
     * Display the specified resource.
     *
     * @param  \App\News  $news
     * @return \Illuminate\Http\Response
     * @param  \Illuminate\Http\Request  $request
     */
    
     public function show($id , Viewers $view , Request $request)
     {
        
         $post = News::find($id);
         if(Auth::user())
         {
            if (Viewers::where('news_id', '=', $id)->exists() &&
            Viewers::where( 'user_id', '=', auth()->user()->id)->exists() ) {
               return view('posts.show')->with('post', $post);}
        }

        if(Auth::guest()){
                  
             $ip = $request->ip();
             
            if (Viewers::where('news_id', '=', $id)->exists() &&
            Viewers::where( 'ip_address', '=', $ip )->exists() )
            {
                return view('posts.show')->with('post', $post);}
             }

             if(Auth::user()){
                $view->create([
                   
                   'news_id' => $id,
                   'user_id' => auth()->user()->id,
              
                ]);
             }
             if(Auth::guest()){
               
               
             $view = new Viewers;
             $view->ip_Address =  $ip;
             $view->news_id =  $id;
             $view->save();

          
             }


        
         return view('posts.show')->with('post', $post);
     }

    
}
