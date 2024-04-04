<?php

use App\heading_detail;
use Illuminate\Database\Seeder;

class HeadingDetailSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        heading_detail::truncate();

        heading_detail::create([
            'education_detail'  =>  'ksajnxakjncajkscna',
            'health_detail' =>  'ksajnxakjncajkscnaasda dasdasdasd asd asd asd asd',
            'social_development_detail' =>  'ksajnxakjncajkscnaasdas cvxcvdfv dvdfgsdfsdf sdf',
            'youth_sports_detail'   =>  'ksajnxakjncajkscna sdsdc xvdsdsvsdfsdfsdvsdvsdvs',
            'labour_employee_detail'    =>  'ksajnxakjncajkscnasdv svsd vsd sdvsdv sdv sdvsd sd sdsd sdvsdddddddddddddddddddddddddddddddddddd',
            'language_culture_detail'  =>  'ksajnxakjncajkscna sd sd sdfsd sdvsdsfefregdad fdvsdfgsdfvsdfgvsdfvdsf vdfvd'
        ]);

    }
}
