<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class notice extends Model
{
   

    protected $dates    =   [
        'created_at',
        'updated_at'
        ];

    public $fillable    =   [
        'notice_name',
        'notice_file',
        'notice_publisher',
        'notice_date',
        'notice_description',
        'notice_category_id',
        'status',
        'mark_as_new',
        'created_at',
        'updated_at',
        ];

    public function sms(): \Illuminate\Database\Eloquent\Relations\HasMany
    {
        return $this->hasMany(SmsDetail::class);
    }
}
