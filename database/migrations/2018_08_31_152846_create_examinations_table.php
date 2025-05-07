<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateExaminationsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('examinations', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('user_id');
            $table->integer('student_id');
            $table->integer('class_id'); 
            $table->integer('session_id');
            $table->integer('term_id');
            $table->integer('subject_id');
            $table->string('cont_ass');
            $table->string('exam')->nullable();
            $table->string('total')->nullable();
            $table->string('grade')->nullable();
            $table->string('point')->nullable();
            $table->string('unit')->default(1)->nullable(); //university
            $table->boolean('status')->nullable()->default(1);
            $table->string('remark')->nullable();
            $table->string('comment')->nullable();
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
        Schema::dropIfExists('examinations');
    }
}
