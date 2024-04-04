<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        DB::statement('SET FOREIGN_KEY_CHECKS=1');
        // $this->call(UserSeeder::class);
        $this->call(HeaderSeeder::class);
        $this->call(InfrastructureSeeder::class);
        $this->call(SliderSeeder::class);
        $this->call(OfficeDetailSeeder::class);
        //$this->call(VideoSeeder::class);
        //$this->call(AudioSeeder::class);


        DB::statement('SET FOREIGN_KEY_CHECKS=0');

        $this->call(SettingEmployeeSeeder::class);
        $this->call(DastabejCategorySeeder::class);
        $this->call(DastabejSeeder::class);
        $this->call(SocialRegionCategorySeeder::class);
        $this->call(SocialRegionSeeder::class);
        $this->call(DownloadCategorySeeder::class);
        $this->call(DownloadSeeder::class);
        $this->call(PhotoAlbumSeeder::class);
        $this->call(PhotoSeeder::class);
        $this->call(PhotoSeeder::class);
        $this->call(NoticeCategorySeeder::class);
        $this->call(NoticeSeeder::class);
        $this->call(PublicationCategorySeeder::class);
        $this->call(PublicationSeeder::class);
        $this->call(FaqSeeder::class);
        $this->call(LinkSeeder::class);
        $this->call(DepartmentSeeder::class);
        $this->call(DesignationSeeder::class);
        $this->call(EmployeeSeeder::class);
        $this->call(BillSeeder::class);
        $this->call(HeadingDetailSeeder::class);
        $this->call(DirectorateSeeder::class);
        $this->call(SubOrdinateOfficeSeeder::class);
        $this->call(RoleTableSeeder::class);
        $this->call(UserTableSeeder::class);
        $this->call(RoleTableSeeder::class);
        $this->call(UserTableSeeder::class);

        $this->call(Covid19Seeder::class);

    }
}
