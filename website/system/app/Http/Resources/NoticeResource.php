<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

class NoticeResource extends JsonResource
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
            'notice_title'  =>  $this->notice_name,
            'notice_file'  =>  asset('storage/asstes/notice/'.$this->notice_file),
            'notice_publisher'  =>  $this->notice_publisher,
            'notice_date'  =>  $this->notice_date,
            'notice_description'  =>  $this->notice_description,
            'Notice_category'  =>  $this->notice_category->notice_category_name,
            'is_new'    =>  $this->mark_as_new == 0 ? true : false,
            'href'  =>  [
                'view_single_file'  =>  route('api.notice.show',$this->id),
            ]

        ];
    }
}
