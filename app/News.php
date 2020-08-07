<?php

namespace App;


use Spatie\MediaLibrary\Models\Media;
use Spatie\MediaLibrary\HasMedia\HasMedia;
use Spatie\MediaLibrary\HasMedia\HasMediaTrait;

class News extends Model implements HasMedia
{

    use HasMediaTrait;

    public $timestamps = true;

    public function viewers(){
        return $this->hasMany('App\Viewers');
    }

    public function votes()
    {
        return $this->morphMany('App\Vote', 'voteable');
    }

    public function comments()
    {
        return $this->hasMany('App\Comment')->whereNull('comment_id')->orderBy('created_at', 'DESC');
    }


    public function posts(){

     $posts = News::orderBy('created_at','desc')->paginate(8);

     return $posts;


    }

    public function post(){

     $post = News::orderBy('created_at','desc')->limit(6)->get();

     return $post;
}
    public function drasatposts(){

     $post = News::orderBy('created_at','desc')->where('hashtag', '4')->get();
     return $post;
}
    public function epreeposts(){

     $post = News::orderBy('created_at','desc')->where('hashtag', '1')->get();
     return $post;
}


public function egyptposts(){

      $Accept = [ 'Accept'=> '1'];

     $post = News::orderBy('created_at','desc')->where('hashtag', '2')->where($Accept)->get();
     return $post;
}

    public function worldposts(){
        $Accept = [ 'Accept'=> '1'];

     $post = News::orderBy('created_at','desc')->where('hashtag', '5')->where($Accept)->get();
     return $post;
}
    public function plastienposts(){
        $Accept = [ 'Accept'=> '1'];

     $post = News::orderBy('created_at','desc')->where('hashtag', '3')->where($Accept)->get();
     return $post;
}
    public function arabicposts(){
        $Accept = [ 'Accept'=> '1'];

     $post = News::orderBy('created_at','desc')->where('hashtag', '7')->where($Accept)->get();
     return $post;
}
    public function newscollposts(){
        $Accept = [ 'Accept'=> '1'];

     $post = News::orderBy('created_at','desc')->where('hashtag', '6')->where($Accept)->get();
     return $post;
}






    public function nwes(){
        $Accept = [ 'Accept'=> '1'];

        $nwes = News::orderBy('created_at','desc')->where($Accept)->limit(1)->get();
        return $nwes;


}
    public function nwestest(){
        $Accept = [ 'Accept'=> '1'];

        $nwes = News::orderBy('created_at','desc')->where($Accept)->limit(1)->get();
        return $nwes;


}
    public function nwestestA(){
        $Accept = [ 'Accept'=> '1'];

        $nwes = News::orderBy('created_at','desc')->where($Accept)->limit(5)->get();
        return $nwes;


}
    
    public function EpreNwes(){
        $Accept = [ 'Accept'=> '1'];

        $nwes = News::orderBy('created_at','desc')->where('hashtag', '1')->where($Accept)->limit(5)->get();
        return $nwes;


}
    public function EpreNwesA(){
        $Accept = [ 'Accept'=> '1'];

        $nwes = News::orderBy('created_at','desc')->where('hashtag', '1')->where($Accept)->limit(1)->get();
        return $nwes;


}


    public function EgyNwes(){
        $Accept = [ 'Accept'=> '1'];
        $nwes = News::orderBy('created_at','desc')->where('hashtag', '2')->where($Accept)->limit(5)->get();
        return $nwes;


}

    public function Araposts(){
        $Accept = [ 'Accept'=> '1'];
        $nwes = News::orderBy('created_at','desc')->where('hashtag', '7')->where($Accept)->limit(5)->get();
        return $nwes;


}

    public function Plstenposts(){
        $Accept = [ 'Accept'=> '1'];

        $nwes = News::orderBy('created_at','desc')->where('hashtag', '3')->where($Accept)->limit(5)->get();
        return $nwes;


}
    public function PlstenpostsA(){
        $Accept = [ 'Accept'=> '1'];

        $nwes = News::orderBy('created_at','desc')->where('hashtag', '3')->where($Accept)->limit(1)->get();
        return $nwes;


}

    public function worlposts(){
        $Accept = [ 'Accept'=> '1'];

        $nwes = News::orderBy('created_at','desc')->where('hashtag', '5')->where($Accept)->limit(5)->get();
        return $nwes;


}
    public function lastnNwes(){
        $Accept = [ 'Accept'=> '1'];

        $nwes = News::orderBy('created_at','desc')->where($Accept)->limit(5)->get();
        return $nwes;


}
    public function nwesHeader(){
        $Accept = [ 'Accept'=> '1'];

        $nwes = News::orderBy('created_at','desc')->where($Accept)->limit(2)->get();
        return $nwes;


}
    public function Special(){
        $Accept = [ 'Accept'=> '1'];

        $nwes = News::orderBy('created_at','desc')->where('special', '1')->where($Accept)->limit(4)->get();
        return $nwes;


}
    public function Accepted(){

        $nwes = News::orderBy('created_at','desc')->where('Accept', '1')->get();
        return $nwes;


}
    public function NotAccepted(){


        $NotAccept = [

            'Accept'=> '0',
            'NotAccept'=> '0',


    ];

        $nwes = News::orderBy('created_at','desc')->where($NotAccept)->get();
        return $nwes;


}

    public function NEW(){

        $NEW = News::orderBy('created_at','desc')->limit(1)->get();
        return $NEW;


}
public function registerMediaConversions(Media $media = null)
    {
        $this->addMediaConversion('thumb')
        ->width(370)
        ->height(100);
        $this->addMediaConversion('inimgsmall')
        ->width(100)
        ->height(70);



        $this->addMediaConversion('square')
        ->width(800)
        ->height(412)
        ->sharpen(10);

        $this->addMediaConversion('Newsshow')
        ->width(1300)
        ->height(500)
        ->sharpen(10);

        
    }

    public function isAccepted(){
        if($this->Accept == 1){
            return true;
        } return ;
    }
    public function isNotAccepted(){
        if($this->NotAccept == 1){
            return true;
        } return ;
    }
    public function ispending(){
        if($this->pending == 1){
            return true;
        } return ;
    }



    public function times($e){
        return  $this->editingtimes = 1 + $e;
    }


    public function editnames(){
        return $this->hasMany('App\Editnames');
    }


    public function user(){
         return $this->belongsTo('App\User','user_id');
    }

    //    public function editnames(){
    //     return $this->belongsTo('App\Editnames');
    // }

    public function memo($e){
        return Editnames::where('news_id', '=', $e)->get();
    }

}
