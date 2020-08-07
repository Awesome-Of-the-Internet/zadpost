<?php

namespace App\Http\Controllers;

use App\News;
use App\User;
// use App\SubscribeUsers;
use App\Editnames;
use App\Events\NewNewsHasCreatedEvent;
use App\Mail\NewPostsMail;
use Illuminate\Http\Request;
use Illuminate\Http\Response;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\Mail;

class UserDashboardController extends Controller
{

    public function __construct()
    {
        $this->middleware('auth');
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(News $posts)
    {
        $user_id = auth()->user()->id;
        $user = User::find($user_id);
        return view('dashboard')->with('posts', $user->posts);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('posts.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $this->validate($request, [
            'title' => 'required',
            'body' => 'required',
            'selected' => 'required',
            'special' => 'nullable',
            'Accept' => 'nullable',
            'image' => 'nullable'

            // 'image' => 'image|nullable|max:1999'
        ]);
        $post = new News;
        $post->title = $request->input('title');
        $post->body = $request->input('body');
        $post->hashtag = $request->get('selected');
        $post->user_id = auth()->user()->id;

        if($request->has('Accept')){
            $post->Accept = $request->input('Accept');
        };
        if($request->has('special')){
            $post->special = $request->get('special');
        };



        if($request->hasFile('image')){
            $post->addMediaFromRequest('image')->toMediaCollection('images');
        }
        
        $post->save();
                    //  $Emails = $SubUsers->getEmails();
                    // event(new NewNewsHasCreatedEvent($Emails));


        Session::flash('message', 'Successfully created nerd!');
        return Redirect::to('/dashboard');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\News  $news
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $post = News::find($id);
        return view('posts.show')->with('post', $post);
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
            return redirect('/dashboard')->with('error', 'Unauthorized Page');
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
    public function update(News $news ,Request $request, $id)
    {

        $post = News::find($id);

        $this->validate($request, [
            'title' => 'required',
            'body' => 'required',
            'selected' => 'nullable',
            'special' => 'nullable',
            'editingtimes' => 'nullable',
            // 'ResEdit' => 'nullable',
        ]);






       


        $post->update([
            'title' =>  $request->input('title'),
            'body' => $request->input('body'),
            'hashtag' => $request->get('selected')
            ]);

            if ($request->hasFile('image') && $request->file('image')->isValid() ){
                $post->clearMediaCollection('images');
                $post->addMediaFromRequest('image')
                ->toMediaCollection('images');}

                
            if($request->has('special')){
                $post->update([

                   'special' => $request->get('special'),
                ]);
            };

            if($request->has('selected')){
                $post->update([

                   'hashtag' => $request->get('selected'),
                ]);
            };

            if($request->has('editingtimes')){

                $post->update([

                   'editingtimes' => $news->times($post->editingtimes),
                ]);
            };

            //check for that this post isn't belong to the user
            // check for that this user isn't add any more for editor's Name

         if($post->user_id != auth()->user()->id  ){

                $editname =  new Editnames;
                $editname->name = auth()->user()->name;
                //define wich post you want to know his Editor's
                $editname->news_id = $post->id;
                $editname->user_id = auth()->user()->id;
                if (Editnames::where('news_id', '=', $post->id)->exists() &&
                Editnames::where( 'user_id', '=', auth()->user()->id)->exists()) {

                    return redirect('/dashboard')->with('error', 'Unauthorized Page');

                 }


                 $editname->save();

            }





        return redirect('/dashboard')->with('success', 'Post Updated');
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
            return redirect('/dashboard')->with('error', 'No Post Found');
        }

        // Check for correct user
        if (auth()->user()->id != $post->user_id) {
            return redirect('/dashboard')->with('error', 'Unauthorized Page');
        }

        if ($post->news_image != 'noimage.jpg') {
            // Delete Image
            Storage::delete('public/news_images/' . $post->news_image);
        }

        $post->delete();
        return redirect('/dashboard')->with('success', 'Post Removed');
    }
}
