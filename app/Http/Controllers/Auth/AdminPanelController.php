<?php

namespace App\Http\Controllers;
use App\News;
use Illuminate\Http\Request;
use App\User;
use Illuminate\Support\Facades\Storage;

class AdminPanelController extends Controller
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
     * @return \Illuminate\Http\Response
     */
    public function index(News $posts)
    {

        return view('AdminPanel', compact('posts'));
    }

/**
     * Show the form for editing the specified resource.
     *
     * @param  \App\News  $news
     * @return \Illuminate\Http\Response
     */
    public function edit( $id)
    {
        $post = News::find($id);
        //Check if post exists before deleting


        // Check for correct user
        if (auth()->user()->id != $post->user_id) {
            return redirect('/AdminPanel')->with('error', 'Unauthorized Page');
        }

        return view('posts.edit')->with('post', $post);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\News  $news
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, News $post)
    {
        $this->validate($request, [
            'title' => 'required',
            'body' => 'required',
        ]);

        if ($request->hasFile('image')) {
            $post->clearMediaCollection('images');

            $post->addMediaFromRequest('image')
                ->toMediaCollection('images');
        }

        $post->update([
            'title' =>  $request->input('title'),
            'body' => $request->input('body'),
        ]);



        return redirect('/AdminPanel')->with('success', 'Post Updated');
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\News  $news
     * @return \Illuminate\Http\Response
     */


    public function updateinfo( Request $request , $id)
    {

        $post = News::find($id);

        if (!isset($post)) {
            return redirect('/AdminPanel')->with('error', 'No Post Found');
        }

        if( auth()->user()->admin != true  ){

            return redirect('/AdminPanel')->with('error', 'error Not Found');

        };

        $this->validate($request, [
            'special' => 'nullable',
            'Accept' => 'nullable',
            'NotAccept' => 'nullable',

            // 'image' => 'image|nullable|max:1999'
        ]);


        if($request->has('Accept')){
            $post->update([
               'Accept' => $request->input('Accept'),
            ]);
        };
        if($request->has('pending')){
            $post->update([
        'pending' => $request->input('pending'),
            ]);
        };
        if($request->has('NotAccept')){
            $post->update([
        'NotAccept' => $request->input('NotAccept'),
            ]);
        };

            // $post->update([
            //     'Accept' => $request->input('Accept'),
            //     'pending' => $request->input('pending'),
            //     'NotAccept' => $request->input('NotAccept'),
            //     ]);

            return redirect('/AdminPanel')->with('success', 'مهمه مكتمله  ');
    }

       /**
     * Remove the specified resource from storage.
     *
     * @param  \App\News  $news
     * @return \Illuminate\Http\Response
     */
    public function destroy( $id)
    {
        $post = News::find($id);

        //Check if post exists before deleting
        if (!isset($post)) {
            return redirect('/AdminPanel')->with('error', 'No Post Found');
        }

        // Check for correct user
        if (auth()->user()->id != $post->user_id) {
            return redirect('/AdminPanel')->with('error', 'Unauthorized Page');
        }

        if ($post->news_image != 'noimage.jpg') {
            // Delete Image
            Storage::delete('public/news_images/' . $post->news_image);
        }

        $post->delete();
        return redirect('/AdminPanel')->with('success', 'Post Removed');
    }




}
