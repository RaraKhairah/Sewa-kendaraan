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
        Schema::create('kendaraan', function (Blueprint $table) {
            $table->id('no_pol');
            $table->integer('no_mesin')->unique();
            $table->enum('jenis_mobil', ['mpv', 'city', 'suv']);
            $table->string('nama_mobil', 40);
            $table->enum('merk', ['honda', 'toyota', 'daihatsu']);
            $table->string('kapasitas', 5);
            $table->integer('tarif');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('kendaraan');
    }
};
