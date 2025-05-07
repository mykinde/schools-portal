<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateMidtermexamsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('midtermexams', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('user_id');
            $table->integer('student_id');
            $table->integer('class_id');
            $table->integer('session_id');
            $table->integer('term_id');
            $table->integer('subject_id');
            $table->string('score');
            $table->string('score2');
            $table->string('remarks')->nullable();
            $table->boolean('status')->nullable()->default(1);
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
        Schema::dropIfExists('midtermexams');
    }
}
