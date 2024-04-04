<?php

use App\sub_ordinate_office;
use Illuminate\Database\Seeder;

class SubOrdinateOfficeSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        sub_ordinate_office::truncate();
        sub_ordinate_office::create([
            'sub_ordinate_name'  =>  'sub_ordinate1',
            'sub_ordinate_phone' =>  '999999999',
            'sub_ordinate_email' =>  '123@gmail.com',
            'sub_ordinate_website'   =>  'test.com',
            'directorate_id'   =>  rand(1,4),
        ]);
        sub_ordinate_office::create([
            'sub_ordinate_name'  =>  'sub_ordinate2',
            'sub_ordinate_phone' =>  '999999999',
            'sub_ordinate_email' =>  '123@gmail.com',
            'sub_ordinate_website'   =>  'test.com',
            'directorate_id'   =>  rand(1,4),
        ]);
        sub_ordinate_office::create([
            'sub_ordinate_name'  =>  'sub_ordinate3',
            'sub_ordinate_phone' =>  '999999999',
            'sub_ordinate_email' =>  '123@gmail.com',
            'sub_ordinate_website'   =>  'test.com',
            'directorate_id'   =>  rand(1,4),
        ]);
        sub_ordinate_office::create([
            'sub_ordinate_name'  =>  'sub_ordinate4',
            'sub_ordinate_phone' =>  '999999999',
            'sub_ordinate_email' =>  '123@gmail.com',
            'sub_ordinate_website'   =>  'test.com',
            'directorate_id'   =>  rand(1,4),
        ]);
        sub_ordinate_office::create([
            'sub_ordinate_name'  =>  'sub_ordinate5',
            'sub_ordinate_phone' =>  '999999999',
            'sub_ordinate_email' =>  '123@gmail.com',
            'sub_ordinate_website'   =>  'test.com',
            'directorate_id'   =>  rand(1,4),
        ]);
        sub_ordinate_office::create([
            'sub_ordinate_name'  =>  'sub_ordinate6',
            'sub_ordinate_phone' =>  '999999999',
            'sub_ordinate_email' =>  '123@gmail.com',
            'sub_ordinate_website'   =>  'test.com',
            'directorate_id'   =>  rand(1,4),
        ]);
    }
}
