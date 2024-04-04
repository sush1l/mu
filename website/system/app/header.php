<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class header extends Model
{
    protected $table = 'headers';
    public $timestamps = true;
    public $fillable = [
        'bg_photo', 	'government', 	'ministry', 	'address', 	'twitter_link', 	'map_iframe', 	'facebook_link', 	'twitter', 	'facebook', 	'instagram', 	'youtube',
    ];
}
