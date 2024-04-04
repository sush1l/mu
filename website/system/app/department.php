<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class department extends Model
{

    protected $table = 'departments';
    public $timestamps = true;
    public $fillable = [
        'department_name'
    ];
    public function employees(){
        return $this->hasMany('App/employee');
    }
}
