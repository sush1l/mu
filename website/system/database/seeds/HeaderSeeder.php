<?php

use App\header;
use Illuminate\Database\Seeder;

class HeaderSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {

        header::truncate();

        header::create([
            'government'    =>  'प्रदेश सरकार',
            'ministry'  =>  'सामाजिक विकास मन्त्रालय',
            'address'   =>  'प्रदेश-५, बुटवल',
           ]);
    }
}
