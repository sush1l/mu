<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class publication extends Model
{
    protected $table    =   'publications';
    public $timestamps  =   true;
    public $fillable    =   [ 'publication_name','publication_file','publication_date','publication_category_id','status',    ];
    public function publication_category(){
        return $this->belongsTo('App\publication_category','publication_category_id','id');
    }
}
