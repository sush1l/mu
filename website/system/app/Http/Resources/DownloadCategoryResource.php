<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

class DownloadCategoryResource extends JsonResource
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
            'download_category_name'    =>  $this->download_category_name,
            'href'  =>  [
                'detail_files'  =>  route('api.download_category.show',$this->id),
            ]
        ];
    }
}
