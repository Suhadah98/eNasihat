<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('temujanjis', function (Blueprint $table) {
            $table->unsignedBigInteger('kategorikes');
            $table->foreign('kategorikes')->references('id')->on('kes');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('temujanjis', function (Blueprint $table) {
            $table->dropColumn('kategorikes');
        });
    }
};
