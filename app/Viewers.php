<?php

namespace App;



class Viewers extends Model
{
   protected $fillable = [
      'news_id' , 'user_id' 
   ];

   public function News(){
    return $this->belongsTo('App\News');
   }
}
