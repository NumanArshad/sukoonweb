<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class RenameEducQualExpr extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        //
        Schema::table('basic_infos', function (Blueprint $table) {
            
            $table->renameColumn('education','qualification');
            $table->renameColumn('qualifiation','specialist');
            $table->renameColumn('experienece','experience');
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
