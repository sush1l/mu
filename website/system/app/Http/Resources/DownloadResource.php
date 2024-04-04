<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

class DownloadResource extends JsonResource
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
            'file_name' => $this->download_title,
            'file_date' => $this->download_date,
            'file' => asset('storage/assets/download/'.$this->file),
            'category' => $this->download_category->download_category_name,
            'href'=>[
                'single_file'=>route('api.download.show',$this->id)
            ]
        ];
    }
}
