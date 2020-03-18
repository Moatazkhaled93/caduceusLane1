<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePatientDetiels extends Migration
{
    /**
    * Run the migrations.
    *
    * @return void
    */
    public function up()
    {
        Schema::create('patient_detiels', function (Blueprint $table) {
        $table->bigIncrements('id');
        $table->string('frist_name');
        $table->string('last_name');
        $table->date('date_of_birth');
        $table->integer('phone');
        $table->string('country');
        $table->string('occupation');
        $table->enum('gender', ['Male', 'Female']);
        $table->string('email')->unique();
        $table->bigInteger('pain_id')->unsigned();
        $table->foreign('pain_id')->references('id')->on('pain');
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
        Schema::dropIfExists('patient_detiels');
    }
}