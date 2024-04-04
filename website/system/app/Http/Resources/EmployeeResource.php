<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

class EmployeeResource extends JsonResource
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
            'employee_name' =>  $this->name,
            'employee_photo' =>  asset('storage/assets/employee/'.$this->photo),
            'employee_designation' =>  $this->designations->designation_name,
            'employee_department' => $this->departments->department_name,
            'employee_level' =>  $this->level,
            'employee_phone' =>  $this->phone,
            'employee_email' =>  $this->email,
            'employee_address' =>  $this->address,
        ];
    }
}
