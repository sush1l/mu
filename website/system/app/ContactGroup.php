<?php

namespace App;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ContactGroup extends Model
{
  
    protected $dates = [
        'created_at',
        'updated_at',
    ];
    protected $fillable = [
        'name',
        'created_at',
        'updated_at',
    ];

    public function Contact(): \Illuminate\Database\Eloquent\Relations\BelongsToMany
    {
        return $this->belongsToMany(Contact::class);
    }
}
