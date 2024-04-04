<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class social_region extends Model
{
    protected $table ='social_regions';
    public $timestamps=true;
    public $fillable=[  'social_region_title',     'file',       'social_region_date',        'social_region_category_id'];

    public function social_region_category(){
        return $this->belongsTo('App\social_region_category','social_region_category_id','id');
    }
}
