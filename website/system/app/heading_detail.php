<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class heading_detail extends Model
{
    protected $table = 'heading_details';
    public $timestamps = true;
    public $fillable = [
        'education_detail',
        'health_detail',
        'social_development_detail',
        'youth_sports_detail',
        'labour_employee_detail',
        'language_culture_detail',
    ];


}
