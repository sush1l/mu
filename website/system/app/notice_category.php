<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class notice_category extends Model
{
    protected $table    =   'notice_categories';
    public $timestamps  =   true;
    public $fillable    =   [
        'notice_category_name'
    ];
    public function notices(){
        return $this->hasMany('App\notice');
    }
}
