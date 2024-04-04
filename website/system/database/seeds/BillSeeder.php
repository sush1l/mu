<?php

use App\bill;
use Illuminate\Database\Seeder;

class BillSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        bill::truncate();
        bill::create([
            'description'=>'test',
            'budget_no'=>'123',
            'expense_head'=>'123',
            'buying_process'=>'test',
            'pan_no'=>'123',
            'bill_date'=>\Carbon\Carbon::today(),
            'cash'=>'2500',
            'post_date'=>\Carbon\Carbon::today(),
            'remarks'=>'testing',
            'bill'  =>  'test.jpeg'
        ]);
        bill::create([
            'description'=>'test1',
            'budget_no'=>'123',
            'expense_head'=>'123',
            'buying_process'=>'test',
            'pan_no'=>'123',
            'bill_date'=>\Carbon\Carbon::today(),
            'cash'=>'2500',
            'post_date'=>\Carbon\Carbon::today(),
            'remarks'=>'testing',
            'bill'  =>  'test.jpeg'
        ]);
        bill::create([
            'description'=>'test2',
            'budget_no'=>'123',
            'expense_head'=>'123',
            'buying_process'=>'test',
            'pan_no'=>'123',
            'bill_date'=>\Carbon\Carbon::today(),
            'cash'=>'2500',
            'post_date'=>\Carbon\Carbon::today(),
            'remarks'=>'testing',
            'bill'  =>  'test.jpeg'
        ]);
        bill::create([
            'description'=>'test3',
            'budget_no'=>'123',
            'expense_head'=>'123',
            'buying_process'=>'test',
            'pan_no'=>'123',
            'bill_date'=>\Carbon\Carbon::today(),
            'cash'=>'2500',
            'post_date'=>\Carbon\Carbon::today(),
            'remarks'=>'testing',
            'bill'  =>  'test.jpeg'
        ]);
    }
}
