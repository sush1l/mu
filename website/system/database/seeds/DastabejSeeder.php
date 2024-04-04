<?php

use App\dastabej;
use Carbon\Carbon;
use Illuminate\Database\Seeder;

class DastabejSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        dastabej::truncate();

        dastabej::create([
            'dastabej_title'=>'test',
'file'=>'test.pdf',
'dastabej_date'=>Carbon::today(),
'dastabej_category_id'=>rand(1,4),
        ]);
        dastabej::create([
            'dastabej_title'=>'test1',
'file'=>'test.pdf',
'dastabej_date'=>Carbon::today(),
'dastabej_category_id'=>rand(1,4),
        ]);
        dastabej::create([
            'dastabej_title'=>'test2',
'file'=>'test.pdf',
'dastabej_date'=>Carbon::today(),
'dastabej_category_id'=>rand(1,4),
        ]);
        dastabej::create([
            'dastabej_title'=>'test3',
'file'=>'test.pdf',
'dastabej_date'=>Carbon::today(),
'dastabej_category_id'=>rand(1,4),
        ]);
        dastabej::create([
            'dastabej_title'=>'test4',
'file'=>'test.pdf',
'dastabej_date'=>Carbon::today(),
'dastabej_category_id'=>rand(1,4),
        ]);
        dastabej::create([
            'dastabej_title'=>'test5',
'file'=>'test.pdf',
'dastabej_date'=>Carbon::today(),
'dastabej_category_id'=>rand(1,4),
        ]);


    }
}
