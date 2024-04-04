<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class covid19 extends Model
{
    protected $table ='covid19s';
    public $timestamps=true;
    public $fillable=[
        'updated_date', 	'new_cases', 	'healed', 	'deaths', 	'user_id',
    ];
    public function users(){
        return $this->belongsTo('App\User','user_id','id');
    }
}
