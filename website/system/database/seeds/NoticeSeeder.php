<?php

use App\notice;
use Illuminate\Database\Seeder;

class NoticeSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {

        notice::truncate();
        notice::create([
            'notice_name'   =>  'test',
            'notice_file'   => 'test.pdf' ,
            'notice_publisher'  =>  'Admin',
            'notice_date'   =>  \Carbon\Carbon::today(),
            'notice_description'    =>  'lorem ipsum',
            'notice_category_id'    =>  rand(1,4),
            'status'    =>  rand(0,1),
            'mark_as_new'   =>  rand(0,1),
            ]);
        notice::create([
            'notice_name'   =>  'test1',
            'notice_file'   => 'test.pdf' ,
            'notice_publisher'  =>  'Admin',
            'notice_date'   =>  \Carbon\Carbon::today(),
            'notice_description'    =>  'lorem ipsum',
            'notice_category_id'    =>  rand(1,4),
            'status'    =>  rand(0,1),
            'mark_as_new'   =>  rand(0,1),
            ]);
        notice::create([
            'notice_name'   =>  'test2',
            'notice_file'   => 'test.pdf' ,
            'notice_publisher'  =>  'Admin',
            'notice_date'   =>  \Carbon\Carbon::today(),
            'notice_description'    =>  'lorem ipsum',
            'notice_category_id'    =>  rand(1,4),
            'status'    =>  rand(0,1),
            'mark_as_new'   =>  rand(0,1),
            ]);
        notice::create([
            'notice_name'   =>  'test3',
            'notice_file'   => 'test.pdf' ,
            'notice_publisher'  =>  'Admin',
            'notice_date'   =>  \Carbon\Carbon::today(),
            'notice_description'    =>  'lorem ipsum',
            'notice_category_id'    =>  rand(1,4),
            'status'    =>  rand(0,1),
            'mark_as_new'   =>  rand(0,1),
            ]);
        notice::create([
            'notice_name'   =>  'test4',
            'notice_file'   => 'test.pdf' ,
            'notice_publisher'  =>  'Admin',
            'notice_date'   =>  \Carbon\Carbon::today(),
            'notice_description'    =>  'lorem ipsum',
            'notice_category_id'    =>  rand(1,4),
            'status'    =>  rand(0,1),
            'mark_as_new'   =>  rand(0,1),
            ]);

    }
}
