<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Course extends Model
{
    use SoftDeletes;

    protected $dates=[
        'deleted_at',
        'created_at',
        'updated_at',
    ];

    protected $fillable=[
        'title',
        'title_en',
        'description',
        'description_en',
        'icon'
    ];
    public function getIconAttribute($value): string
    {
        return asset('storage/' . $value);
    }

    public function setIconAttribute($value)
    {
        $this->attributes['icon'] = $value->store('course', 'public');
    }
}
