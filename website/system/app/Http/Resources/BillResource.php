<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

class BillResource extends JsonResource
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
            'description'   =>  $this->description,
            'budget_no' =>  $this->budget_no,
            'expense_head'  =>  $this->expense_head,
            'buying_process'    =>  $this->buying_process,
            'pan_no'    =>  $this->pan_no,
            'bill'  =>  $this->bill == ''? '': asset('storage/assets/bill/'.$this->bill),
            'bill_date' =>  $this->bill_date,
            'cash'  =>  $this->cash,
            'post_date' =>  $this->post_date,
            'remarks'   =>  $this->remarks,
        ];
    }
}
