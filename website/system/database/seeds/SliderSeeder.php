<?php

use App\slider;
use Illuminate\Database\Seeder;

class SliderSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        slider::truncate();
        slider::create([
            'title' =>  'test1',
            'photo' =>  'testphoto.jpg'
        ]);
        slider::create([
            'title' =>  'test2',
            'photo' =>  'testphoto.jpg'
        ]);
        slider::create([
            'title' =>  'test4',
            'photo' =>  'testphoto.jpg'
        ]);
        slider::create([
            'title' =>  'test3',
            'photo' =>  'testphoto.jpg'
        ]);

    }
}
