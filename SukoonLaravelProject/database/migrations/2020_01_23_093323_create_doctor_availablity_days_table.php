<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateDoctorAvailablityDaysTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('doctor_availablity_days', function (Blueprint $table) {
            $table->bigIncrements('id');
        //    $table->string('location')->unique();
            $table->integer('hospitalId')->unsigned();
        
        //     $table->foreign('hospitalId')->references('id')->on('hospitals__clinics');
             $table->integer('dayId')->unsigned();
         //    $table->foreign('dayId')->references('id')->on('days');
             $table->string('time');
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
        Schema::dropIfExists('doctor_availablity_days');
    }
}
