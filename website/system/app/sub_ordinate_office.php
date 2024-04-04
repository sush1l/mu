<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class sub_ordinate_office extends Model
{
    protected $table = 'sub_ordinate_offices';
    public $timestamps = true;
    public $fillable = [
        'sub_ordinate_name',
        'sub_ordinate_phone',
        'sub_ordinate_email',
        'sub_ordinate_website',
        'directorate_id',
    ];
    public function directorate(){
        return $this->belongsTo('App\directorate','directorate_id','id');
    }
}
