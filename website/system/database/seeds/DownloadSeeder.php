<?php

use App\download;
use Carbon\Carbon;
use Illuminate\Database\Seeder;

class DownloadSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        download::truncate();

        download::create([
            'download_title'=>'test',
            'file'=>'test.pdf',
            'download_date'=>Carbon::today(),
            'download_category_id'=>rand(1,4),
        ]);
        download::create([
            'download_title'=>'test1',
            'file'=>'test.pdf',
            'download_date'=>Carbon::today(),
            'download_category_id'=>rand(1,4),
        ]);
        download::create([
            'download_title'=>'test2',
            'file'=>'test.pdf',
            'download_date'=>Carbon::today(),
            'download_category_id'=>rand(1,4),
        ]);
        download::create([
            'download_title'=>'test3',
            'file'=>'test.pdf',
            'download_date'=>Carbon::today(),
            'download_category_id'=>rand(1,4),
        ]);
        download::create([
            'download_title'=>'test4',
            'file'=>'test.pdf',
            'download_date'=>Carbon::today(),
            'download_category_id'=>rand(1,4),
        ]);
        download::create([
            'download_title'=>'test5',
            'file'=>'test.pdf',
            'download_date'=>Carbon::today(),
            'download_category_id'=>rand(1,4),
        ]);
    }
}
