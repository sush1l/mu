<?php

use App\employee;
use Illuminate\Database\Seeder;

class EmployeeSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        employee::truncate();

       employee::create([
           'name'   =>  'test',
           'photo'  =>  'testimage.jpeg',
           'level'  =>  '01',
           'designation_id' =>  rand(1,4),
           'department_id'  =>  rand(1,4),
           'phone'  =>  '9999999999',
           'email'  =>  '123@gmail.com',
           'address'    =>  'Nepalgunj',
           'position'   =>  rand(1,5),
           'status' =>  rand(0,1),
        ]);
       employee::create([
           'name'   =>  'test',
           'photo'  =>  'testimage.jpeg',
           'level'  =>  '01',
           'designation_id' =>  rand(1,4),
           'department_id'  =>  rand(1,4),
           'phone'  =>  '9999999999',
           'email'  =>  '123@gmail.com',
           'address'    =>  'Nepalgunj',
           'position'   =>  rand(1,5),
           'status' =>  rand(0,1),
        ]);
       employee::create([
           'name'   =>  'test',
           'photo'  =>  'testimage.jpeg',
           'level'  =>  '01',
           'designation_id' =>  rand(1,4),
           'department_id'  =>  rand(1,4),
           'phone'  =>  '9999999999',
           'email'  =>  '123@gmail.com',
           'address'    =>  'Nepalgunj',
           'position'   =>  rand(1,5),
           'status' =>  rand(0,1),
        ]);
       employee::create([
           'name'   =>  'test',
           'photo'  =>  'testimage.jpeg',
           'level'  =>  '01',
           'designation_id' =>  rand(1,4),
           'department_id'  =>  rand(1,4),
           'phone'  =>  '9999999999',
           'email'  =>  '123@gmail.com',
           'address'    =>  'Nepalgunj',
           'position'   =>  rand(1,5),
           'status' =>  rand(0,1),
        ]);
       employee::create([
           'name'   =>  'test',
           'photo'  =>  'testimage.jpeg',
           'level'  =>  '01',
           'designation_id' =>  rand(1,4),
           'department_id'  =>  rand(1,4),
           'phone'  =>  '9999999999',
           'email'  =>  '123@gmail.com',
           'address'    =>  'Nepalgunj',
           'position'   =>  rand(1,5),
           'status' =>  rand(0,1),
        ]);
    }
}
