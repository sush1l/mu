<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class faq extends Model
{
    protected $table ='faqs';
    public $timestamps=true;
    public $fillable=[
        'question','answer',
    ];
}
