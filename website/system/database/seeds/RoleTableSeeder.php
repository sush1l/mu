<?php

use App\Role;
use Illuminate\Database\Seeder;

class RoleTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Role::truncate();

        Role::create(['name'=>'Super-admin']);
        Role::create(['name'=>'Editor']);
        Role::create(['name'=>'Viewer']);
        Role::create(['name'=>'Covid19']);
    }
}
