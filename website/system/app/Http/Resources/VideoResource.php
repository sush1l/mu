<?php

namespace App\Http\Resources;

use App\video;
use Illuminate\Http\Resources\Json\JsonResource;

class VideoResource extends JsonResource
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
            'video_title'   =>  $this->video_name,
            'video' =>  $this->video,
            'href'  =>  [
                'single_video'  => route('api.video.show',$this->id)
            ]
        ];
    }
}
