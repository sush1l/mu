<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

class header extends JsonResource
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
            'bg_photo'  => $this->bg_photo == "" ? '' : asset('storage/assets/header/'.$this->bg_photo),
            'government'    =>  $this->government,
            'ministry'  =>  $this->ministry,
            'address'   =>  $this->address,
            'twitter_link'  =>  $this->twitter_link,
            'map_iframe'    =>  $this->map_iframe,
            'facebook_link' =>  $this->facebook_link,
            'twitter'   =>  $this->twitter,
            'facebook'  =>  $this->facebook,
            'instagram' =>  $this->instagram,
            'youtube'   =>  $this->youtube
        ];
    }
}
