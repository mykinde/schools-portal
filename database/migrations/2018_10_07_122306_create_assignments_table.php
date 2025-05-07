<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateAssignmentsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('assignments', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('student_id');
            $table->integer('class_id');
            $table->integer('session_id');
            $table->integer('term_id');
            $table->integer('subject_id');
            $table->string('score1');  //expected to be over 10marks consistence  sake
            $table->string('score2')->nullable();
            $table->string('score3')->nullable();
            $table->string('score4')->nullable();
            $table->string('score5')->nullable(); 
            $table->string('total')->nullable();
            $table->boolean('status')->nullable()->default(1);
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
        Schema::dropIfExists('assignments');
    }
}
