<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class samiti extends Model
{
   protected $table = 'samitis';
    public $timestamps = true;
    public $fillable = [
       'name','designation','phone','address','position','status'
    ];
}
