<?php

namespace App;

class Comment extends Model

{

    protected $keyType = 'string';
    protected $with = ['user','votes'];
    protected $appends = ['repliesCount'];



    public function user()
    {
       return  $this->belongsTo('App\User', 'user_id');
    }



    public function news()
    {
        return $this->belongsTo('App\News');
    }

    public function getRepliesCountAttribute()
    {
        return $this->replies->count();
    }

    public function votes()
    {
        return $this->morphMany('App\Vote', 'voteable');
    }


    public function replies()
    {
        return $this->hasMany('App\Comment', 'comment_id')->whereNotNull('comment_id');
    }
}
