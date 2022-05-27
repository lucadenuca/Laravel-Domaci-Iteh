<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class PromenaKoloneGradiliste extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('gradilistes', function (Blueprint $table) {
            $table->renameColumn('brojRadnika', 'broj_radnika');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('gradilistes', function (Blueprint $table) {
            $table->renameColumn('broj_radnika', 'brojRadnika');
        });
    }
}
