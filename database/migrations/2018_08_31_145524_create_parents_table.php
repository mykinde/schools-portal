<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateParentsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('parents', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('user_id');
            $table->string('altphone')->nullable();
            $table->string('maritalstatus'); 
            $table->string('maidenname')->nullable();
            $table->string('partner_name')->nullable();
            $table->string('denomination')->nullable();
            $table->string('relationship')->nullable(); //mother father grand gurardiance
            $table->string('town')->nullable();
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
        Schema::dropIfExists('parents');
    }
}
