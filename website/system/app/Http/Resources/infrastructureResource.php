<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

class infrastructureResource extends JsonResource
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
            'school'    =>  $this->school,
            'hospital'  =>  $this->hospital,
            'employment_office'     =>  $this->employment_office,
            'university'    =>  $this->university,
            'population'    =>  $this->population,
            'social_organization'   =>  $this->social_organization,
            'update_date '  =>  $this->update_date,
        ];
    }
}
