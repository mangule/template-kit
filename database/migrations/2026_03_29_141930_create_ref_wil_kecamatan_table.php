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
        Schema::create('ref_wil_kecamatan', function (Blueprint $table) {
            $table->string('id_kecamatan', 6)->primary();
            $table->string('id_kabupaten', 4);
            $table->string('nama_kecamatan', 50);
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('ref_wil_kecamatan');
    }
};
