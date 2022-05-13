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
        Schema::create('simptoms', function (Blueprint $table) {
            $table->id('simptomID');
            $table->string('simptom');
            $table->unsignedBigInteger('kesID');
            $table->foreign('kesID')->references('kesID')->on('kes');
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
        Schema::dropIfExists('simptoms');
    }
};
