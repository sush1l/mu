<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class social_region_category extends Model
{
    protected $table ='social_region_categories';
    public $timestamps=true;
    public $fillable=[
        'social_region_category_name'
    ];
    public function social_region(){
        return $this->hasMany('App\social_region');
    }
}
