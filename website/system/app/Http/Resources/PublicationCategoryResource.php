<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

class PublicationCategoryResource extends JsonResource
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
            'category_name' =>  $this->publication_category_name,
            'href'  =>  [
                'publication_under_category' =>  route('api.publication_category.show',$this->id)
            ]
        ];
    }
}
