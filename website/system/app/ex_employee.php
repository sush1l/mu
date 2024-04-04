<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ex_employee extends Model
{
 protected $table = 'ex_employees';
    public $timestamps = true;
    public $fillable = [
       'name','photo','level','designation','department','phone','email','address','date','lastdate','position','status'
    ];
    
}
