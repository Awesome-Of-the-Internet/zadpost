<?php

namespace App;

use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Str;

use Spatie\MediaLibrary\Models\Media;
use Spatie\MediaLibrary\HasMedia\HasMedia;
use Spatie\MediaLibrary\HasMedia\HasMediaTrait;

class User extends Authenticatable implements HasMedia
{
    use Notifiable;
    use HasMediaTrait;


    public $incrementing = false;
    protected $primaryKey = 'id';
    protected $keyType = 'string';
    /**
     * The "booting" method of the model.
     *
     * @return void
     */
    protected static function boot()
    {
        parent::boot();

        static::creating(function ($model) {
            $model->{$model->getKeyName()} = (string) Str::uuid();
        });
    }

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name', 'email', 'password', 'active' ,'admin' , 'editor' , 'Phone' , 'country' , 'image' , 'description'
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];

    /**
     * The attributes that should be cast to native types.
     *
     * @var array
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
    ];



    public function comments()
    {
        return $this->hasMany('App\Comment');
    }


    public function registerMediaConversions(Media $media = null)

    {
        $this->addMediaConversion('thumb')
            ->width(100)
            ->height(100)
            ->nonQueued();
    }



    public function isAuth(){
        if($this->VA ==   1 ) {
            return true;
        } return ;
    }

         public function isActive(){
             if($this->active ==   1 ) {
            return true;
        } return ;
         }
         public function isAdmin(){
             if($this->admin ==   1 ) {
            return true;
        } return ;
         }
         public function isEditor(){
        if($this->editor ==   1 ) {
            return true;
        } return ;
         }
         public function isEdiAd(){
        if($this->editor ==   1 ||  $this->admin ==   1) {
            return true;
        } return ;
         }
         public function isUser(){
             if($this->editor ==   0 &&  $this->admin ==   0) {
            return true;
        } return ;
         }
         public function isUsandEd(){
        if($this->editor ==   1 &&  $this->admin ==   0) {
            return true;
        } return ;
         }

         public function fetcUsers(){

            return User::all()->except(Auth::id());

         }

         public function userIsActivated ()
         {
             if($this->active){
                 return true;
             }
            return false ;
         }

         public function posts(){
             return $this->hasMany('App\News');
         }

         public function editnames(){
             return $this->hasMany('App\Editnames');
         }
        //  public function editnames(){
        //      return $this->belongsTo('App\Editnames');
        //  }


        public function toggleVote($entity, $type) {
            $vote = $entity->votes->where('user_id', $this->id)->first();

            if ($vote) {
                $vote->update([
                    'type' => $type
                ]);

                return $vote->refresh();
            } else {
                return $entity->votes()->create([
                    'type' => $type,
                    'user_id' => $this->id
                ]);
            }
        }


        }
