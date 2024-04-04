<?php

use App\photo;
use Illuminate\Database\Seeder;

class PhotoSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        photo::truncate();

        photo::create([
            'photo_title' => 'test',
            'photo_album_id' => rand(1,6),
            'photo' => 'test.jpeg',

        ]);
        photo::create([
            'photo_title' => 'test1',
            'photo_album_id' => rand(1,6),
            'photo' => 'test.jpeg',

        ]);
        photo::create([
            'photo_title' => 'test2',
            'photo_album_id' => rand(1,6),
            'photo' => 'test.jpeg',

        ]);
        photo::create([
            'photo_title' => 'test3',
            'photo_album_id' => rand(1,6),
            'photo' => 'test.jpeg',

        ]);
    }
}
