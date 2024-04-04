<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateHeadingDetailsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('heading_details', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->longText('education_detail')->nullable();
            $table->longText('health_detail')->nullable();
            $table->longText('social_development_detail')->nullable();
            $table->longText('youth_sports_detail')->nullable();
            $table->longText('labour_employee_detail')->nullable();
            $table->longText('language_culture_detail')->nullable();
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
        Schema::dropIfExists('heading_details');
    }
}
