<?php

namespace App;

use Spatie\MediaLibrary\Models\Media;
use Spatie\MediaLibrary\HasMedia\HasMedia;
use Spatie\MediaLibrary\HasMedia\HasMediaTrait;

class YoutupeVideo extends Model implements HasMedia
{
    // protected $fillable = [
    //     'title' , 'link' , 'user' , 'image'
    // ];
    protected $guarded = [];

    use HasMediaTrait;

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
}

}
