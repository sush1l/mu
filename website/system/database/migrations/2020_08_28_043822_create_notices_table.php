<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateNoticesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('notices', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('notice_name','255');
            $table->string('notice_file','255');
            $table->string('notice_publisher','255')->nullable();
            $table->date('notice_date');
            $table->longText('notice_description')->nullable();
            $table->bigInteger('notice_category_id')->unsigned();
            $table->boolean('status');
            $table->boolean('mark_as_new');
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
        Schema::dropIfExists('notices');
    }
}
