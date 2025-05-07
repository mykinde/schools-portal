<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateStudentsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('students', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('user_id');
            $table->string('studentid')->unique()->nullable();// id-number
            $table->string('first_class');
            $table->string('admissiondate')->nullable();  
            $table->string('parent_name')->nullable();
            $table->integer('parent_id')->nullable();
            $table->string('date_enrol')->nullable();
            $table->string('old_class_sch')->nullable();
            $table->string('relationship')->nullable(); //son dauth nice
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
        Schema::dropIfExists('students');
    }
}
