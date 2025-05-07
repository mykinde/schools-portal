<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateSkillsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('skills', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('auth_id');
            $table->integer('user_id');
            $table->integer('term_id');  //new
            $table->integer('session_id'); //new
            $table->integer('class_id')->nullable();
            $table->integer('musical_skill')->nullable()->default(1);
            $table->integer('drawing_and_painting')->nullable()->default(1);
            $table->integer('handling_tools')->nullable()->default(1);
            $table->integer('sport')->nullable()->default(1);
            $table->integer('games')->nullable()->default(1);
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
        Schema::dropIfExists('skills');
    }
}
