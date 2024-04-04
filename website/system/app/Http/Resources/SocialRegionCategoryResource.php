<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

class SocialRegionCategoryResource extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return array
     */
    public function toArray($request)
    {
        return[
            'social_region_category_name'    =>  $this->social_region_category_name,
            'href'  =>  [
                'detail_files'  =>  route('api.social_region_category.show',$this->id),
            ]
        ];
    }
}
