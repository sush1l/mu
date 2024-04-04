<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class link extends Model
{
    protected $table ='links';
    public $timestamps=true;
    public $fillable=[
        'link_name', 	'url',
    ];
}
