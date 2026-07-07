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
        Schema::create('desas', function (Blueprint $table) {
            $table->uuid('id')->primary();

            $table->string('kode_desa')->unique();

            $table->string('nama_desa');

            $table->string('kecamatan');

            $table->string('kabupaten');

            $table->string('provinsi');

            $table->string('kode_pos')->nullable();

            $table->string('telepon')->nullable();

            $table->string('email')->nullable();

            $table->string('logo')->nullable();

            $table->boolean('aktif')->default(true);

            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('desas');
    }
};
