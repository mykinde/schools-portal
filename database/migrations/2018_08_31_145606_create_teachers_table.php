<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTeachersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('teachers', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('user_id');
            $table->string('staffid')->unique()->nullable(); //staff-number
            $table->string('department');
            $table->string('class');
            //$table->string('subject'); subject taught table
            $table->string('designation')->nullable();
            $table->string('grade_level')->nullable();
            $table->string('promotion')->nullable();
            $table->string('dateemployed')->nullable();
            $table->string('category')->default('Temporary'); //permanent casual, contract
            $table->text('qualification_at_point_employment')->nullable(); //details in full //new
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
        Schema::dropIfExists('teachers');
    }
}
