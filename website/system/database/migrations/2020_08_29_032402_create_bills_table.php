<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateBillsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('bills', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->longText('description')->nullable();
            $table->string('budget_no','255');
            $table->string('expense_head','255')->nullable();
            $table->string('buying_process','255')->nullable();
            $table->string('pan_no','255')->nullable();
            $table->string('bill','255')->nullable();
            $table->date('bill_date')->nullable();
            $table->string('cash','255')->nullable();
            $table->date('post_date')->nullable();
            $table->longText('remarks')->nullable();
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
        Schema::dropIfExists('bills');
    }
}
