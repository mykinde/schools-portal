<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateGuardiansTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('guardians', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('auth_id');
            $table->integer('parent_id');
            $table->string('altphone')->nullable();
            $table->string('maritalstatus'); 
            $table->Text('maidenname')->nullable();
            $table->string('partner_name')->nullable();
            $table->string('denomination')->nullable();
            $table->string('relationship')->nullable(); //mother father grand gurardiance
            $table->string('town')->nullable();
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
        Schema::dropIfExists('guardians');
    }
}
