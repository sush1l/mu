<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

class SubOrdinateOfficeResource extends JsonResource
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
            'sub_ordinate_name'  =>  $this->sub_ordinate_name,
            'sub_ordinate_phone' =>  $this->sub_ordinate_phone,
            'sub_ordinate_email' =>  $this->sub_ordinate_email,
            'sub_ordinate_website'   =>  $this->sub_ordinate_website,
            'directorate_name'   =>  $this->directorate->directorate_name
        ];
    }
}
