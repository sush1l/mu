<?php

use App\Role;
use App\User;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class UserTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        User::truncate();
        DB::table('role_user')->truncate();


        $superRole = Role::where('name','Super-admin')->first();
        $editorRole = Role::where('name','Editor')->first();
        $viewerRole = Role::where('name','Viewer')->first();
        $covid19Role = Role::where('name','Covid19')->first();

        $super = User::create([
           'name'   =>  'Super Admin',
            'email'     =>  'super@admin.com',
            'password'  =>  Hash::make('password'),
            'phone' =>  '9864663780',
        ]);
        $editor = User::create([
           'name'   =>  'Editor',
            'email'     =>  'editor@admin.com',
            'password'  =>  Hash::make('password'),
            'phone' =>  '9815544040',
        ]);
        $viewer = User::create([
           'name'   =>  'Viewer',
            'email'     =>  'viewer@admin.com',
            'password'  =>  Hash::make('password'),
            'phone' =>  '9858042433',
        ]);
        $covid19 = User::create([
           'name'   =>  'Covid19',
            'email'     =>  'covid19@admin.com',
            'password'  =>  Hash::make('password'),
            'phone' =>  '9814580880',
        ]);
        $super->roles()->attach($superRole);
        $editor->roles()->attach($editorRole);
        $viewer->roles()->attach($viewerRole);
        $covid19->roles()->attach($covid19Role);
    }
}
