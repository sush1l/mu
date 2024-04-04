<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

class DastabejResource extends JsonResource
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
            'file_name' => $this->dastabej_title,
            'file_date' => $this->dastabej_date,
            'file' => asset('storage/assets/dastabej/'.$this->file),
            'category' => $this->dastabej_category->dastabej_category_name,
            'href'=>[
                'single_file'=>route('api.dastabej.show',$this->id)
            ]
        ];
    }
}
