<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateSocialRegionsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('social_regions', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('social_region_title','150');
            $table->string('file','150');
            $table->date('social_region_date');
            $table->bigInteger('social_region_category_id')->unsigned();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('social_regions');
    }
}
