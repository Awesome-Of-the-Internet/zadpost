<?php

namespace App\Http\Controllers;
use App\News;
use Illuminate\Http\Request;
use App\User;
use Illuminate\Support\Facades\Storage;
use App\Editnames;
use Illuminate\Support\Facades\Auth;


class AdminPanelController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('AuthAdEd');



    }

        // if (auth()->user()->admin != 1 || auth()->user()->editor != 1 ) {
        //     return redirect('/home')->with('error', 'لا يجوز "بصوت لطفى لبيب"');
        // }


    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(News $posts)
    {
        if ( auth()->user()->admin != 1 && auth()->user()->editor != 1) {
            return redirect('/');
        }

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

        if (!auth()->user()->admin = 1 || auth()->user()->id != $post->user_id) {
            return redirect('/AdminDashboard')->with('error', 'غير مسموح');
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
    public function update( Request $request, $id)
    {

        $post = News::find($id);


        $this->validate($request, [
            'title' => 'required',
            'body' => 'required',
            'special' => 'nullable',
            'selected' => 'required',

        ]);

        if ($request->hasFile('image')) {
            $post->clearMediaCollection('images');

            $post->addMediaFromRequest('image')
                ->toMediaCollection('images');
        }
        if($request->has('special')){
            $post->update([

               'special' => $request->get('special'),
            ]);
        };

        $post->update([
            'title' =>  $request->input('title'),
            'body' => $request->input('body'),
            'hashtag' => $request->get('selected')
        ]);



        if($post->user_id != auth()->user()->id  ){


            if (Editnames::where('news_id', '=', $post->id)->exists() &&
            Editnames::where( 'user_id', '=', auth()->user()->id)->exists()) {

                return redirect('/dashboard')->with('error', 'Unauthorized Page');

             }

             $editname =  new Editnames;
             $editname->name = auth()->user()->name;
             //define wich post you want to know his Editor's
             $editname->news_id = $post->id;
             $editname->user_id = auth()->user()->id;
             $editname->save();


        }


        return redirect('/AdminDashboard')->with('editnames', $editname);
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
            return redirect('/AdminDashboard')->with('error', 'No Post Found');
        }

        if( auth()->user()->admin != 1  ){

            return redirect('/AdminDashboard')->with('error', 'error Not Found');

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

            return redirect('/AdminDashboard')->with('success', 'مهمه مكتمله  ');
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
            return redirect('/AdminDashboard')->with('error', 'No Post Found');
        }

        // Check for correct user
        if (!auth()->user()->admin = 1 || auth()->user()->id != $post->user_id) {
            return redirect('/AdminDashboard')->with('error', 'Not  authoraized');
        }

        if ($post->news_image != 'noimage.jpg') {
            // Delete Image
            Storage::delete('public/news_images/' . $post->news_image);
        }

        $post->delete();
        return redirect('/AdminDashboard')->with('success', 'Post Removed');
    }




}
