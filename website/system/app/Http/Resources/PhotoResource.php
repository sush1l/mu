<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

class PhotoResource extends JsonResource
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
            'photo_id'  =>$this->id,
            'photo_name' => $this->photo_title,
            'photo' =>  asset('storage/assets/photo/'.$this->photo),
            'album_name'    =>  $this->photo_album->album_name,
            'href'  =>  [
                'view_single_photo' =>  route('api.photo.show',$this->id),
            ]
        ];
    }
}
