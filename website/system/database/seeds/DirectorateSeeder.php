<?php

use App\directorate;
use Illuminate\Database\Seeder;

class DirectorateSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        directorate::truncate();
        directorate::create([
            'directorate_name'  =>  'directorate1',
            'directorate_phone' =>  '999999999',
            'directorate_email' =>  '123@gmail.com',
            'directorate_website'   =>  'test.com',
        ]);
        directorate::create([
            'directorate_name'  =>  'directorate2',
            'directorate_phone' =>  '999999999',
            'directorate_email' =>  '123@gmail.com',
            'directorate_website'   =>  'test.com',
        ]);
        directorate::create([
            'directorate_name'  =>  'directorate3',
            'directorate_phone' =>  '999999999',
            'directorate_email' =>  '123@gmail.com',
            'directorate_website'   =>  'test.com',
        ]);
        directorate::create([
            'directorate_name'  =>  'directorate4',
            'directorate_phone' =>  '999999999',
            'directorate_email' =>  '123@gmail.com',
            'directorate_website'   =>  'test.com',
        ]);
    }
}
