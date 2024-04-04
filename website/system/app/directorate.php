<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class directorate extends Model
{
    protected $table = 'directorates';
    public $timestamps = true;
    public $fillable = [
        'directorate_name',
        'directorate_phone',
        'directorate_email',
        'directorate_website',
    ];
    public function sub_ordinates(){
        return $this->hasMany('App\sub_ordinate_office');
    }
}
