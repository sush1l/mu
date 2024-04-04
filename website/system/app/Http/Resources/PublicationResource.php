<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

class PublicationResource extends JsonResource
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
            'publication_title'  =>  $this->publication_name,
            'publication_file'  =>  asset('storage/assets/publication/'.$this->publication_file),
            'publication_date'  =>  $this->publication_date,
            'publication_category'  =>  $this->publication_category->publication_category_name,
            'href'  =>  [
                'view_single_file'  =>  route('api.publication.show',$this->id),
            ]

        ];
    }
}
