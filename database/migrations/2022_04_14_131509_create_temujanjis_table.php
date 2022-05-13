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
        Schema::create('temujanjis', function (Blueprint $table) {
            $table->id();
            $table->string('nama_klien');
            $table->string('masalah');
            $table->date('tarikh');
            $table->string('status');
            $table->string('nama_kaunselor');
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
        Schema::dropIfExists('temujanjis');
    }
};
