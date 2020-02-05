<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class ConsultbookingImprove extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        //
        Schema::table('consult_bookings', function (Blueprint $table) {
           
            $table->integer('doctoravailabilityId')->unsigned();
           
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {  Schema::dropIfExists('consult_bookings');
        //
    }
}
