<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class video extends Model
{
    protected $table ='videos';
    public $timestamps=true;
    public $fillable=[
        'video_title','video'
    ];
    public function video(){
        return $this->belongsTo('App\video','video_title','id');
    }
}
