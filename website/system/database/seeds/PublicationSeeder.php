<?php

use App\publication;
use Illuminate\Database\Seeder;

class PublicationSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        publication::truncate();
        publication::create([
            'publication_name'   =>  'test',
            'publication_file'   => 'test.pdf' ,
            'publication_date'   =>  \Carbon\Carbon::today(),
            'publication_category_id'    =>  rand(1,4),
            'status'    =>  rand(0,1),
        ]);
        publication::create([
            'publication_name'   =>  'test1',
            'publication_file'   => 'test.pdf' ,
            'publication_date'   =>  \Carbon\Carbon::today(),
            'publication_category_id'    =>  rand(1,4),
            'status'    =>  rand(0,1),
        ]);
        publication::create([
            'publication_name'   =>  'test2',
            'publication_file'   => 'test.pdf' ,
            'publication_date'   =>  \Carbon\Carbon::today(),
            'publication_category_id'    =>  rand(1,4),
            'status'    =>  rand(0,1),
        ]);
        publication::create([
            'publication_name'   =>  'test3',
            'publication_file'   => 'test.pdf' ,
            'publication_date'   =>  \Carbon\Carbon::today(),
            'publication_category_id'    =>  rand(1,4),
            'status'    =>  rand(0,1),
        ]);

    }
}
