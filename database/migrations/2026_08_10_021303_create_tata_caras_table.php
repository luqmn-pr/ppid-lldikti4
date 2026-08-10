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
        Schema::create('tata_caras', function (Blueprint $table) {
            $table->id();
            $table->enum('kategori', ['permohonan_informasi', 'pengajuan_keberatan', 'sengketa_informasi']);
            $table->string('judul_langkah');
            $table->text('deskripsi_langkah');
            $table->string('icon')->default('ph-check-circle');
            $table->integer('urutan')->default(0);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('tata_caras');
    }
};
