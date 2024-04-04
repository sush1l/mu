<?php

use App\social_region_category;
use Illuminate\Database\Seeder;

class SocialRegionCategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        social_region_category::truncate();

        social_region_category::create([
            'social_region_category_name'    =>  'शिक्षा'
        ]);
        social_region_category::create([
            'social_region_category_name'    =>  'स्वास्थ्य'
        ]);
        social_region_category::create([
            'social_region_category_name'    =>  'सामाजिक विकास'
        ]);
        social_region_category::create([
            'social_region_category_name'    =>  'युवा तथा खेलकुद'
        ]);
        social_region_category::create([
            'social_region_category_name'    =>  'श्रम तथा रोजगार'
        ]);
        social_region_category::create([
            'social_region_category_name'    =>  'भाषा संस्कृति'
        ]);
    }
}
