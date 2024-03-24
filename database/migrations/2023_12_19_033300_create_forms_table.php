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
        Schema::create('forms', function (Blueprint $table) {
            $table->id();
            // halaman 1
            $table->string('kuesioner')->nullable();
            $table->string('sekolah')->nullable();
            $table->string('provinsi')->nullable();
            $table->string('kabkota')->nullable();
            $table->string('puskesmas')->nullable();
            $table->string('nama_petugas')->nullable();
            $table->string('hari_tanggal')->nullable();

            // halaman 2
            $table->string('nama_lengkap')->nullable();
            $table->string('nik')->nullable();
            $table->string('kelas')->nullable();
            $table->string('tanggal_lahir')->nullable();
            $table->string('umur')->nullable();
            $table->string('jenis_kelamin')->nullable();

            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('forms');
    }
};
