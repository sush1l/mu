<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class office_detail extends Model
{
    protected $table ='office_details';
    public $timestamps=true;
    public $fillable=[
        'introduction', 'introduction_date',    'aim',  'aim_date', 'plan', 'plan_date',    'work_area',    'work_area_date',   'organization_structure',   'organization_structure_date',  'citizen_charter',  'citizen_charter_date', 'darbandi_structure', 'darbandi_structure_date'
        ];
    /**
     * @var mixed
     */
}
