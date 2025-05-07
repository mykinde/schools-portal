<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTaughtsubjectsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('taughtsubjects', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('user_id');
            $table->string('subject_name');
            $table->string('no_of_students')->nullable();
            $table->string('school');
            $table->string('class')->nullable();
            $table->string('category')->nullable(); //casual as specialist class 
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
        Schema::dropIfExists('taughtsubjects');
    }
}
