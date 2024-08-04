<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('invoice', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('id_kwitansi')->unsigned();
            $table->integer('id_penyewa')->unsigned();
            $table->string('no_pol', 10);
            $table->timestamps();

            $table->foreign('id_kwitansi')->references('id_kwitansi')->on('kwitansi');
            $table->foreign('id_penyewa')->references('id_penyewa')->on('penyewa');
            $table->foreign('no_pol')->references('no_pol')->on('kendaraan');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('invoice');
    }
};
