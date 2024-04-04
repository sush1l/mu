<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateSamitisTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('samitis', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('name','150');
            $table->string('designation','150')->nullable();
            $table->string('phone','150')->nullable();
            $table->string('address','150')->nullable();
            $table->integer('position');
            $table->boolean('status');
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
        Schema::dropIfExists('samitis');
    }
}
