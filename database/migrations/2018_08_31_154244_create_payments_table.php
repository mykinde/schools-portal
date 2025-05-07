<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePaymentsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('payments', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('student_id');  //edit user_id
            $table->integer('term_id');  //new
            $table->integer('session_id'); //new
            $table->integer('class_id')->nullable(); //new
            $table->string('amount'); 
            $table->string('payee_name')->nullable();
            $table->string('banks')->nullable(); 
            $table->string('mode'); //mode cash cheque pos
            $table->string('category');  //cateory term book [sport party others]  //note category*****
            $table->string('balance');  //new
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
        Schema::dropIfExists('payments');
    }
}
