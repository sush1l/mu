<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

class SettingEmployeeResource extends JsonResource
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
            'employee_name' =>  $this->employee->name,
            'employee_designation' =>  $this->employee->designations->designation_name,
            'employee_department' =>  $this->employee->departments->department_name,
            'employee_photo' =>  asset('storage/assets/employee/'. $this->employee->photo),
            'employee_level' =>  $this->employee->level,
        ];
    }
}
