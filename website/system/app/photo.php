<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class photo extends Model
{
    protected $table ='photos';
    public $timestamps=true;
    public $fillable=[
        'photo_title','photo','photo_album_id'
    ];
    public function photo_album(){
        return $this->belongsTo('App\photo_album','photo_album_id','id');
    }
}
