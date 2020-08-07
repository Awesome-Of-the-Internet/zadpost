<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\YoutupeVideo;
class YoutupeVideoController extends Controller
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
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request )
    {
        $this->validate($request, [
            'title' => 'required',
            'link' => 'required',

            ]);

            $YoutupeVideo = new YoutupeVideo ;
            $YoutupeVideo->link = $request->input('link');
            $YoutupeVideo->title = $request->input('title');
            $YoutupeVideo->user = Auth::user()->name;
            $YoutupeVideo->save();




                if($request->hasFile('image')){
                    $YoutupeVideo->addMediaFromRequest('image')->toMediaCollection('images');
                }


        return redirect('/');
    }
    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\YoutupeVideo  $youtupeVideo
     * @return \Illuminate\Http\Response
     */
    public function destroy(YoutupeVideo $youtupeVideo)
    {
        //
    }
}
