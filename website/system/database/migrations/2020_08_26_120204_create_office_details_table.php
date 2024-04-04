<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateOfficeDetailsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('office_details', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->longText('introduction')->nullable();
            $table->longText('aim');
            $table->date('aim_date')->nullable();
            $table->longText('plan');
            $table->date('plan_date')->nullable();
            $table->longText('work_area');
            $table->date('work_area_date')->nullable();
            $table->string('organization_structure','150');
            $table->date('organization_structure_date')->nullable();
            $table->string('citizen_charter','150');
            $table->date('citizen_charter_date')->nullable();
            $table->string('darbandi_structure','150');
            $table->date('darbandi_structure_date')->nullable();
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
        Schema::dropIfExists('office_details');
    }
}
