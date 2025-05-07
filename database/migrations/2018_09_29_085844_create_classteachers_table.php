<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateClassteachersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('classteachers', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('user_id');
            $table->integer('teacher_id');
            $table->integer('subject_id')->nullable();
            $table->integer('class_id')->nullable();
            $table->integer('session_id');
            $table->integer('term_id');
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
        Schema::dropIfExists('classteachers');
    }
}
