<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateQualificationsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('qualifications', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('auth_id');
            $table->integer('user_id');
            $table->string('institution');
            $table->string('address')->nullable();
            $table->string('program');
            $table->string('qualification'); //bsc mcs bll phd
            $table->string('classofdegree')->nullable();
            $table->string('duration');// educational attended, qualification,
            $table->string('year');// educational attended, qualification,
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
        Schema::dropIfExists('qualifications');
    }
}
