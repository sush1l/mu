<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

class PhotoAlbumResource extends JsonResource
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
            'id'  => $this->id,
            'album_name'    =>  $this->album_name,
            'cover_photo' =>  asset('storage/assets/photo/'.$this->cover_photo),
            'href'  =>  [
                'view_photos'   =>  route('api.photo_album.show',$this->id)
            ]
        ];
    }
}
