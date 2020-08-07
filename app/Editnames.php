<?php

namespace App;


class Editnames extends Model
{
    protected $guarded = [];

    // public function user(){
    //     return $this->belongsTo('App\User');
    // }

    // public function posts(){
    //     return $this->belongsTo('App\Editnames');
    // }


    public function user(){
        return $this->belongsTo('App\User');
    }

    public function posts(){
        return $this->hasMany('App\News');
    }




}
