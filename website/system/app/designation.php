<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class designation extends Model
{
    protected $table = 'designations';
    public $timestamps = true;
    public $fillable = [
        'designation_name'
    ];
    public function employees(){
        return $this->hasMany('App/employee');
    }
}
