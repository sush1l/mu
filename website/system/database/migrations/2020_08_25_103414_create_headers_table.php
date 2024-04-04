<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateHeadersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('headers', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('bg_photo','150')->nullable();
            $table->string('government','150');
            $table->string('ministry','150');
            $table->string('address','150');
            $table->longText('twitter_link')->nullable();
            $table->longText('email')->nullable();
            $table->longText('phone')->nullable();
            $table->longText('map_iframe')->nullable();
            $table->longText('facebook_link')->nullable();
            $table->string('twitter','255')->nullable();
            $table->string('facebook','255')->nullable();
            $table->string('instagram','255')->nullable();
            $table->string('youtube','255')->nullable();
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
        Schema::dropIfExists('headers');
    }
}
