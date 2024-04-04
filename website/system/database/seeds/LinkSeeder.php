<?php

use App\link;
use Illuminate\Database\Seeder;

class LinkSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        link::truncate();
        link::create([
            'link_name'=>'link1',
            'url'=>'https:\\ninjainfosys.com'
        ]);
        link::create([
            'link_name'=>'link1',
            'url'=>'https:\\ninjainfosys.com'
        ]);
        link::create([
            'link_name'=>'link1',
            'url'=>'https:\\ninjainfosys.com'
        ]);
    }
}
