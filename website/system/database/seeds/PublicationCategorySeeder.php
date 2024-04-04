<?php

use App\publication_category;
use Illuminate\Database\Seeder;

class PublicationCategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        publication_category::truncate();
        publication_category::create([
            'publication_category_name'  =>  'छात्रवृत्ति'
        ]);
        publication_category::create([
            'publication_category_name'  =>  'मन्त्रालयस्तर बैठक'
        ]);
        publication_category::create([
            'publication_category_name'  =>  'फारमहरू'
        ]);
        publication_category::create([
            'publication_category_name'  =>  'अन्य'
        ]);
    }
}
