<?php

use App\infrastructure;
use Illuminate\Database\Seeder;

class InfrastructureSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        infrastructure::truncate();
        infrastructure::create([
            'school'    =>  '450',
            'hospital'  =>  '914',
            'employment_office'     => '2',
            'university'    =>  '2',
            'population'    =>  '4499272',
            'social_organization'   =>  '40',
            'update_date'  =>  '2020/08/26',
        ]);
    }
}
