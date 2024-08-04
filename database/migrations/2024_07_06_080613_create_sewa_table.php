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
        Schema::create('sewa', function (Blueprint $table) {
            $table->increments('id_sewa');
            $table->string('no_pol', 10);
            $table->date('tgl_sewa');
            $table->date('tgl_selesai');
            $table->string('tlp_tujuan', 15);
            $table->text('alamat_tujuan');
            $table->integer('biaya_sewa');
            $table->string('kota', 50)->default('PONTIANAK');
            $table->unsignedInteger('id_penyewa');
            $table->integer('jumlah_penumpang');
            $table->unsignedInteger('id_kwitansi');
            $table->timestamps();

            $table->foreign('no_pol')->references('no_pol')->on('kendaraan');
            $table->foreign('id_penyewa')->references('id_penyewa')->on('penyewa');
            $table->foreign('id_kwitansi')->references('id_kwitansi')->on('kwitansi');
         
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('sewa');
    }
};
