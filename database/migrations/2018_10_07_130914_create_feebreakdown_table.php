<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateFeebreakdownTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('feebreakdown', function (Blueprint $table) {
            $table->increments('id');
            $table->string('name');
            $table->integer('class_id');
            $table->integer('term_id');
            $table->integer('session_id');
            $table->integer('subject_id');
            $table->string('amount');
            $table->string('category')->nullable(); //tuition books excursion others extratutor
            $table->string('remarks')->nullable();
            $table->timestamps();
            $table->softDeletes();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('feebreakdown');
    }
}
