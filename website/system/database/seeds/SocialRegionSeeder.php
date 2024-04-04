<?php

use App\social_region;
use App\social_region_category;
use Carbon\Carbon;
use Illuminate\Database\Seeder;

class SocialRegionSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        social_region::truncate();

        social_region::create([
            'social_region_title'=>'test',
            'file'=>'test.pdf',
            'social_region_date'=>Carbon::today(),
            'social_region_category_id'=>rand(1,6),
        ]);
        social_region::create([
            'social_region_title'=>'test1',
            'file'=>'test.pdf',
            'social_region_date'=>Carbon::today(),
            'social_region_category_id'=>rand(1,6),
        ]);
        social_region::create([
            'social_region_title'=>'test2',
            'file'=>'test.pdf',
            'social_region_date'=>Carbon::today(),
            'social_region_category_id'=>rand(1,6),
        ]);
        social_region::create([
            'social_region_title'=>'test3',
            'file'=>'test.pdf',
            'social_region_date'=>Carbon::today(),
            'social_region_category_id'=>rand(1,6),
        ]);
        social_region::create([
            'social_region_title'=>'test4',
            'file'=>'test.pdf',
            'social_region_date'=>Carbon::today(),
            'social_region_category_id'=>rand(1,6),
        ]);
        social_region::create([
            'social_region_title'=>'test5',
            'file'=>'test.pdf',
            'social_region_date'=>Carbon::today(),
            'social_region_category_id'=>rand(1,6),
        ]);
        social_region::create([
            'social_region_title'=>'test6',
            'file'=>'test.pdf',
            'social_region_date'=>Carbon::today(),
            'social_region_category_id'=>rand(1,6),
        ]);
        social_region::create([
            'social_region_title'=>'test7',
            'file'=>'test.pdf',
            'social_region_date'=>Carbon::today(),
            'social_region_category_id'=>rand(1,6),
        ]);
        social_region::create([
            'social_region_title'=>'test8',
            'file'=>'test.pdf',
            'social_region_date'=>Carbon::today(),
            'social_region_category_id'=>rand(1,6),
        ]);
        social_region::create([
            'social_region_title'=>'test9',
            'file'=>'test.pdf',
            'social_region_date'=>Carbon::today(),
            'social_region_category_id'=>rand(1,6),
        ]);
        social_region::create([
            'social_region_title'=>'test10',
            'file'=>'test.pdf',
            'social_region_date'=>Carbon::today(),
            'social_region_category_id'=>rand(1,6),
        ]);


    }
}
