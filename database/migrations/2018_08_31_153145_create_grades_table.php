<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateGradesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('grades', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('student_id');
            $table->integer('class_id');
            $table->integer('session_id');
            $table->integer('term_id');
            $table->string('no_of_subjects')->nullable();
            $table->string('grade')->nullable();
            $table->string('point')->nullable();
            $table->string('unit')->nullable();
            $table->string('max')->nullable();
            $table->string('avg')->nullable();
            $table->string('gross')->nullable();
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
        Schema::dropIfExists('grades');
    }
}
