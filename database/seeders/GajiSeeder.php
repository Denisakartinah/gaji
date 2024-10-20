<?php 

namespace Database\Seeders;

use App\Models\Gaji;
use Illuminate\Database\Seeder;

class GajiSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $gaji = [
            [
                'bulan' => 'Oktober',
                'nama_pegawai' => 'Arif Syaputra',
                'nip' => '12345678',
                'jabatan' => 'Manager',
                'gaji' => 5000000,
                'tukin' => 1500000,
                'transport' => 500000,
                'uang_makan' => 300000,
                'jumlah' => 7300000,
                'koperasi' => 100000,
                'ptwp' => 50000,
                'ikahi' => 50000,
                'ipaspi' => 30000,
                'dana_sosial' => 20000,
                'pphim' => 10000,
                'infaq_mesjid' => 5000,
                'pot_lain_lain' => 15000,
                'jumlah_potongan' => 250000,
                'jumlah_akhir' => 7050000,
            ],
            [
                'bulan' => 'Oktober',
                'nama_pegawai' => 'Syifa Nur Syaila',
                'nip' => '87654321',
                'jabatan' => 'Staff',
                'gaji' => 3000000,
                'tukin' => 1000000,
                'transport' => 400000,
                'uang_makan' => 250000,
                'jumlah' => 4650000,
                'koperasi' => 80000,
                'ptwp' => 40000,
                'ikahi' => 30000,
                'ipaspi' => 20000,
                'dana_sosial' => 15000,
                'pphim' => 8000,
                'infaq_mesjid' => 4000,
                'pot_lain_lain' => 10000,
                'jumlah_potongan' => 187000,
                'jumlah_akhir' => 4463000,
            ],
        ];

        foreach ($gaji as $key => $v) {
            Gaji::create($v);
        }
    }
}
