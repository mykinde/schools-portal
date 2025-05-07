<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePaymentstatusesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('paymentstatuses', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('user_id');
            $table->integer('student_id'); //new
            $table->integer('class_id')->nullable();  //new
            $table->integer('term_id');     //new
            $table->integer('session_id');  //new
            $table->boolean('status')->default(0);
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
        Schema::dropIfExists('paymentstatuses');
    }
}
