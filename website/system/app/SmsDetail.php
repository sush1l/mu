<?php

namespace App;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class SmsDetail extends Model
{
 
    protected $dates = [
        'created_at',
        'updated_at'
    ];

    protected $fillable = [
        'to',
        'message',
        'notice_id',
        'created_at',
        'updated_at',
    ];

    public function notice(): \Illuminate\Database\Eloquent\Relations\BelongsTo
    {
        return $this->belongsTo(Notice::class);
    }
}
