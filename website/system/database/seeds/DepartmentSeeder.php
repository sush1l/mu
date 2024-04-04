<?php

use App\department;
use Illuminate\Database\Seeder;

class DepartmentSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
       department::truncate();

        department::create([
           'department_name'    =>  'test1'
        ]);
        department::create([
           'department_name'    =>  'test2'
        ]);
        department::create([
           'department_name'    =>  'test3'
        ]);
        department::create([
           'department_name'    =>  'test4'
        ]);
    }
}
