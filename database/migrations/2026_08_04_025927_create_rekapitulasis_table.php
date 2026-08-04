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
        Schema::create('rekapitulasis', function (Blueprint $table) {
            $table->id();
            $table->integer('tahun');
            $table->integer('total_permohonan')->default(0);
            $table->integer('dikabulkan')->default(0);
            $table->integer('ditolak')->default(0);
            $table->string('gambar_grafik')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('rekapitulasis');
    }
};
