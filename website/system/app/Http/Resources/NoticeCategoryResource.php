<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

class NoticeCategoryResource extends JsonResource
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
            'category_name' =>  $this->notice_category_name,
            'href'  =>  [
                'notice_under_category' =>  route('api.notice_category.show',$this->id)
            ]
        ];
    }
}
