<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('penyewa', function (Blueprint $table) {
            $table->id('id_penyewa'); // Primary key
            $table->string('nama_penyewa', 100);
            $table->text('alamat');
            $table->string('no_hp', 15);
            $table->timestamps();
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('penyewa');
    }
};
