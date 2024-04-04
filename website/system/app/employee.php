<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class employee extends Model
{
    protected $table = 'employees';
    public $timestamps = true;
    public $fillable = [
       'name','photo','level','designation_id','department_id','phone','email','address','position','status'
    ];
    public function departments(){
        return $this->belongsTo('App\department','department_id','id');
    }
    public function designations(){
        return $this->belongsTo('App\designation','designation_id','id');
    }
    public function setting_employee(){
        return $this->hasOne('App\setting_employee');
    }
}
