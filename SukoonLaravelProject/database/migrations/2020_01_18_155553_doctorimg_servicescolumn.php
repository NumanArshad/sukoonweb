<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class DoctorimgServicescolumn extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('basic_infos', function (Blueprint $table) {
            $table->string('profile_img');
            $table->boolean('bookappointment')->default(true);
            $table->boolean('consultant')->default(true);
        });
       
        
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        //
        Schema::dropIfExists('basic_infos');
    }
}
