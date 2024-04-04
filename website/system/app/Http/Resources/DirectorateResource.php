<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

class DirectorateResource extends JsonResource
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
            'directorate_name'  =>  $this->directorate_name,
            'directorate_phone' =>  $this->directorate_phone,
            'directorate_email' =>  $this->directorate_email,
            'directorate_website'   =>  $this->directorate_website,
            'href'  =>  [
                'offices'   =>  route('api.directorate.show',$this->id)
            ]
        ];
    }
}
