<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateAllocationofsubjectsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('allocationofsubjects', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('user_id');
            $table->integer('teacher_id');
            $table->integer('subject_id');
            $table->integer('class_id')->nullable();
            $table->integer('session_id')->nullable();
            $table->integer('term_id')->nullable();
            $table->softDeletes();
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
        Schema::dropIfExists('allocationofsubjects');
    }
}
