<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class setting_employee extends Model
{
    protected $table ='setting_employees';
    public $timestamps=true;
    public $fillable=[
                'employee_id'
       ];
    public function employee(){
        return $this->belongsTo('App\employee','employee_id','id');
    }
}
