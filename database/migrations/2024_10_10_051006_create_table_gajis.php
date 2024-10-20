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
        Schema::create('gaji', function (Blueprint $table) {
            $table->string('nip');
            $table->string('nama_pegawai');
            $table->string('bulan');
            $table->string('jabatan');
            $table->string('gaji');
            $table->string('tukin');
            $table->string('transport');
            $table->string('uang_makan');
            $table->string('jumlah');
            $table->string('koprasi');
            $table->string('ptwp');
            $table->string('ikahi');
            $table->string('ipaspi');
            $table->string('dana_sosial');
            $table->string('pphim');
            $table->string('dharmayukti');
            $table->string('infaq_mesjid');
            $table->string('pot_lain_lain');
            $table->string('jumlah_pot');
            $table->string('jumlah_akhir');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('gaji');
    }
};
