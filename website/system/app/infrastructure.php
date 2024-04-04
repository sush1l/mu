<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class infrastructure extends Model
{
    protected $table ='infrastructures';
    public $timestamps=true;
    public $fillable=[
        'school', 	'hospital', 	'employment_office', 	'university', 	'population', 	'social_organization', 	'update_date',
    ];

}
