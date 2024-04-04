<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class bill extends Model
{
    protected $table ='bills';
    public $timestamps=true;
    public $fillable=[ 'description',
'budget_no',
'expense_head',
'buying_process',
'pan_no',
        'bill',
'bill_date',
'cash',
'post_date',
'remarks',];

}
