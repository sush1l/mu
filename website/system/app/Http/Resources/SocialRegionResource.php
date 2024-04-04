<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

class SocialRegionResource extends JsonResource
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
            'file_name' => $this->social_region_title,
            'file_date' => $this->social_region_date,
            'file' => asset('storage/assets/social_region/'.$this->file),
            'category' => $this->social_region_category->social_region_category_name,
            'href'=>[
                'single_file'=>route('api.social_region.show',$this->id)
            ]
        ];
    }
}
