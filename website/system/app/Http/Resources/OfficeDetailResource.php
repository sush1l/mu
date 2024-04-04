<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

class OfficeDetailResource extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return array
     */
    public function toArray($request)
    {
        return [
            'introduction'  =>  $this->introduction,
            'introduction_date' =>  $this->introduction_date,
            'aim'   =>  $this->aim,
            'aim_date'  =>  $this->aim_date,
            'plan'  =>  $this->plan,
            'plan_date' =>  $this->plan_date,
            'work_area' =>  $this->work_area,
            'work_area_date'    =>  $this->work_area_date,
            'organization_structure'    =>  asset('storage/assets/office/'.$this->organization_structure),
            'organization_structure_date'   =>  $this->organization_structure_date,
            'citizen_charter'   =>  asset('storage/assets/office/'.$this->citizen_charter),
            'citizen_charter_date'  =>  $this->citizen_charter_date,

        ];
    }
}
