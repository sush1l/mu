<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

class HeadingDetailResource extends JsonResource
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
            'education_detail'  =>  $this->education_detail,
            'health_detail'  =>  $this->health_detail,
            'social_development_detail'  =>  $this->social_development_detail,
            'youth_sports_detail'  =>  $this->youth_sports_detail,
            'labour_employee_detail'  =>  $this->labour_employee_detail,
            'language_culture_detail'  =>  $this->language_culture_detail,
        ];
    }
}
