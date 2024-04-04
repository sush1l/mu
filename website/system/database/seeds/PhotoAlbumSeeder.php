<?php

use App\photo_album;
use Illuminate\Database\Seeder;

class PhotoAlbumSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        photo_album::truncate();

            photo_album::create([
                'album_name' => 'test',
                'cover_photo' => 'test.jpeg'
            ]);
            photo_album::create([
                'album_name' => 'test1',
                'cover_photo' => 'test.jpeg'
            ]);
            photo_album::create([
                'album_name' => 'test2',
                'cover_photo' => 'test.jpeg'
            ]);
            photo_album::create([
                'album_name' => 'test3',
                'cover_photo' => 'test.jpeg'
            ]);
            photo_album::create([
                'album_name' => 'test4',
                'cover_photo' => 'test.jpeg'
            ]);
            photo_album::create([
                'album_name' => 'test5',
                'cover_photo' => 'test.jpeg'
            ]);

    }
}
