<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class download_category extends Model
{
    protected $table ='download_categories';
    public $timestamps=true;
    public $fillable=[
        'download_category_name'
    ];
    public function download(){
        return $this->hasMany('App\download');
    }
}
