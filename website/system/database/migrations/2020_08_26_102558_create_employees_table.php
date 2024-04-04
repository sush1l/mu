<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateEmployeesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('employees', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('name','150');
            $table->string('photo','150')->nullable();
            $table->bigInteger('department_id')->unsigned();
            $table->bigInteger('designation_id')->unsigned();
            $table->string('level','150')->nullable();
            $table->string('phone','150')->nullable();
            $table->string('email','150')->nullable();
            $table->string('address','150')->nullable();
            $table->integer('position');
            $table->boolean('status');
            $table->foreign('department_id')->references('id')->on('departments');
            $table->foreign('designation_id')->references('id')->on('designations');
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
        Schema::dropIfExists('employees');
    }
}
