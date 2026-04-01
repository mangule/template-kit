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
        Schema::create('ref_wil_desa', function (Blueprint $table) {
            $table->string('id_desa', 10)->primary();
            $table->string('id_kecamatan', 6);
            $table->string('nama_desa', 50);
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('ref_wil_desa');
    }
};
