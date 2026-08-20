<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::table('tata_caras', function (Blueprint $table) {
            $table->string('gambar')->nullable()->after('icon');
            $table->string('link')->nullable()->after('gambar');
            $table->text('deskripsi_langkah')->nullable()->change();
            $table->string('icon')->nullable()->change();
        });
    }

    public function down(): void
    {
        Schema::table('tata_caras', function (Blueprint $table) {
            $table->dropColumn('gambar');
            $table->dropColumn('link');
        });
    }
};
