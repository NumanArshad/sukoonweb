<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateBookAppointmentsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('book_appointments', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->integer('doctoravailabilityId')->unsigned();
            $table->string('appointmentdate');
            $table->string('time');
            $table->string('patientname');
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
        Schema::dropIfExists('book_appointments');
    }
}
