<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class dastabej_category extends Model
{
    protected $table ='dastabej_categories';
    public $timestamps=true;
    public $fillable=[
        'dastabej_category_name'
    ];
    public function dastabej(){
        return $this->hasMany('App\dastabej');
    }
}
