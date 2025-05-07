<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateAffectivesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('affectives', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('auth_id');
            $table->integer('user_id');
            $table->integer('term_id');  //new
            $table->integer('session_id'); //new
            $table->integer('class_id')->nullable();
            $table->integer('attentiveness')->nullable()->default(1);
            $table->integer('neatness')->nullable()->default(1);
            $table->integer('politeness')->nullable()->default(1);
            $table->integer('punctuality')->nullable()->default(1);
            $table->integer('relativeness')->nullable()->default(1);
            $table->integer('perseverance')->nullable()->default(1);
            $table->integer('attitude_work')->nullable()->default(1);
            $table->integer('health')->nullable()->default(1);
            $table->integer('self_control')->nullable()->default(1);
            $table->integer('speaking')->nullable()->default(1);
            $table->integer('handwriting')->nullable()->default(1);
            $table->string('teacher_comment')->nullable();  //new
            $table->string('headmaster_comment')->nullable(); //new
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
        Schema::dropIfExists('affectives');
    }
}
