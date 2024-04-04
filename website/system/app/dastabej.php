<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class dastabej extends Model
{
    protected $table ='dastabejs';
    public $timestamps=true;
    public $fillable=[  'dastabej_title',     'file',       'dastabej_date',        'dastabej_category_id'];
    public function dastabej_category(){
        return $this->belongsTo('App\dastabej_category','dastabej_category_id','id');
    }
}
