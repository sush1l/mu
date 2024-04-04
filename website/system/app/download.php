<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class download extends Model
{
    protected $table ='downloads';
    public $timestamps=true;
    public $fillable=[  'download_title',     'file',       'download_date',        'download_category_id'];
    public function download_category()
    {
        return $this->belongsTo('App\download_category', 'download_category_id', 'id');
    }
}
