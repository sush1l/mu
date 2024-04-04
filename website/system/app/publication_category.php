<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class publication_category extends Model
{
    protected $table = 'publication_categories';
    public $timestamps = true;
    public $fillable = [
        'publication_category_name'
    ];

    public function publications()
    {
        return $this->hasMany('App\publication');
    }
}
