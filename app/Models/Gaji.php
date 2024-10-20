<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Gaji extends Model
{
    use HasFactory;

    protected $table = 'gaji'; 

    protected $fillable = [
        "bulan",
        "nama_pegawai",
        "nip",
        "jabatan",
        "gaji",
        "tukin",
        "transport",
        "uang_makan",
        "jumlah",
        "koperasi",
        "ptwp",
        "ikahi",
        "ipaspi",
        "pphim",
        "dharmayukti",
        "infaq_mesjid",
        "pot_lain_lain",
        "jumlah_pot",
        "jumlah_akhir",
    ];

    public $timestamps = true; // Ubah menjadi false jika tidak menggunakan timestamp
}
