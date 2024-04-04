<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateDastabejsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('dastabejs', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('dastabej_title','150');
            $table->string('file','150');
            $table->date('dastabej_date');
            $table->bigInteger('dastabej_category_id')->unsigned();
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
        Schema::dropIfExists('dastabejs');
    }
}
