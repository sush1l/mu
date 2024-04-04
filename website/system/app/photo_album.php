<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class photo_album extends Model
{
    protected $table ='photo_albums';
    public $timestamps=true;
    public $fillable=[
        'album_name','cover_photo',
        ];
    public function photos(){
        return $this->hasMany('App\photo');
    }
}
