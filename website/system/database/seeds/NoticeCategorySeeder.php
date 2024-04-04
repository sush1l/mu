<?php

use App\notice_category;
use Illuminate\Database\Seeder;

class NoticeCategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        notice_category::truncate();
        notice_category::create([
            'notice_category_name'  =>  'सूचना तथा समाचारहरु'
        ]);
        notice_category::create([
            'notice_category_name'  =>  'प्रेस बिज्ञप्ति'
        ]);
        notice_category::create([
            'notice_category_name'  =>  'बोलपत्र'
        ]);
        notice_category::create([
            'notice_category_name'  =>  'अन्य'
        ]);
    }
}
