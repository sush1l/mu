<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class pcr extends Model
{
    protected $table ='pcrs';
    public $timestamps=true;
    public $fillable=[
        'uploaded_date', 	'pcr', 	'isolation', 	'quarantine', 	'user_id',
    ];
    public function users(){
        return $this->belongsTo('App\User','user_id','id');
    }
}
