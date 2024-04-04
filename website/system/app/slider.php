<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class slider extends Model
{
    protected $table ='sliders';
    public $timestamps=true;
    public $fillable=[
        'title',    'photo'
    ];
}
