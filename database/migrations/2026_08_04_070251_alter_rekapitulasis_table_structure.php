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
        Schema::table('rekapitulasis', function (Blueprint $table) {
            $table->string('judul')->after('tahun');
            $table->renameColumn('gambar_grafik', 'gambar');
            $table->dropColumn(['total_permohonan', 'dikabulkan', 'ditolak']);
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('rekapitulasis', function (Blueprint $table) {
            $table->dropColumn('judul');
            $table->renameColumn('gambar', 'gambar_grafik');
            $table->integer('total_permohonan')->default(0);
            $table->integer('dikabulkan')->default(0);
            $table->integer('ditolak')->default(0);
        });
    }
};
