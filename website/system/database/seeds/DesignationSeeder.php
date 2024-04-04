<?php

use App\designation;
use Illuminate\Database\Seeder;

class DesignationSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        designation::truncate();

        designation::create([
            'designation_name'    =>  'test1'
        ]);
        designation::create([
            'designation_name'    =>  'test2'
        ]);
        designation::create([
            'designation_name'    =>  'test3'
        ]);
        designation::create([
            'designation_name'    =>  'test4'
        ]);
    }
}
