<?php

namespace App\Http\Resources;

use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\JsonResource;

class DastabejCategoryResource extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @param  Request  $request
     * @return array
     */
    public function toArray($request)
    {
        return[
            'dastabej_category_name'    =>  $this->dastabej_category_name,
            'href'  =>  [
                'detail_files'  =>  route('api.dastabej_category.show',$this->id),
            ]
        ];
    }
}
