<?php

use App\setting_employee;
use Illuminate\Database\Seeder;

class SettingEmployeeSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        setting_employee::truncate();

        setting_employee::create([
           'employee_id' =>  rand(1,5),
        ]);
        setting_employee::create([
           'employee_id' =>  rand(1,5),
        ]);
        setting_employee::create([
           'employee_id' =>  rand(1,5),
        ]);
        setting_employee::create([
           'employee_id' =>  rand(1,5),
        ]);
    }
}
