<?php

use App\covid19;
use Carbon\Carbon;
use Illuminate\Database\Seeder;

class Covid19Seeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        covid19::truncate();
        covid19::create([
            'updated_date'  =>  Carbon::today(),
            'new_cases' =>  199,
            'healed'    =>  500,
            'deaths'    =>  5,
            'user_id'   =>  rand(1,4),
        ]);
        covid19::create([
            'updated_date'  =>  Carbon::today(),
            'new_cases' =>  150,
            'healed'    =>  2000,
            'deaths'    =>  5,
            'user_id'   =>  rand(1,4),
        ]);
        covid19::create([
            'updated_date'  =>  Carbon::today(),
            'new_cases' =>  100,
            'healed'    =>  1500,
            'deaths'    =>  2,
            'user_id'   =>  rand(1,4),
        ]);
        covid19::create([
            'updated_date'  =>  Carbon::today(),
            'new_cases' =>  200,
            'healed'    =>  1452,
            'deaths'    =>  10,
            'user_id'   =>  rand(1,4),
        ]);
    }
}
