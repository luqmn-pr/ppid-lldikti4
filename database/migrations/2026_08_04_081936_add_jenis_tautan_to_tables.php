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
        Schema::table('informasi_publiks', function (Blueprint $table) {
            $table->string('jenis_tautan')->nullable()->after('link_tautan');
        });

        Schema::table('regulasis', function (Blueprint $table) {
            $table->string('jenis_tautan')->nullable()->after('link_tautan');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('informasi_publiks', function (Blueprint $table) {
            $table->dropColumn('jenis_tautan');
        });

        Schema::table('regulasis', function (Blueprint $table) {
            $table->dropColumn('jenis_tautan');
        });
    }
};
