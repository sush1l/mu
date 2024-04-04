<?php

use App\download_category;
use Illuminate\Database\Seeder;

class DownloadCategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        download_category::truncate();

        download_category::create([
            'download_category_name'    =>  'पाठ्यक्रम'
        ]);
        download_category::create([
            'download_category_name'    =>  'भ्रमण प्रतिबेदन'
        ]);
        download_category::create([
            'download_category_name'    =>  'फारमहरू'
        ]);
        download_category::create([
            'download_category_name'    =>  'विज्ञापन'
        ]);
    }
}
