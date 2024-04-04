<?php

use App\dastabej_category;
use Illuminate\Database\Seeder;

class DastabejCategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        dastabej_category::truncate();
        dastabej_category::create([
            'dastabej_category_name'    =>  'ऐन'
        ]);
        dastabej_category::create([
            'dastabej_category_name'    =>  'कार्यविधि'
        ]);
        dastabej_category::create([
            'dastabej_category_name'    =>  'निर्देशन/परिपत्र'
        ]);
        dastabej_category::create([
            'dastabej_category_name'    =>  'निर्देशिका'
        ]);
    }
}
