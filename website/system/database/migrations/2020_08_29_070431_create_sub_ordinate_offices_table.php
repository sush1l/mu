<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateSubOrdinateOfficesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('sub_ordinate_offices', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('sub_ordinate_name','255');
            $table->string('sub_ordinate_phone','255')->nullable();
            $table->string('sub_ordinate_email','255')->nullable();
            $table->string('sub_ordinate_website','255')->nullable();
            $table->bigInteger('directorate_id')->unsigned();
            $table->foreign('directorate_id')->references('id')->on('directorates');
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
        Schema::dropIfExists('sub_ordinate_offices');
    }
}
