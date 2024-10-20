<?php

namespace App\Http\Controllers;

use App\Models\Gaji; // Ganti model User dengan Gaji
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;

class GajiController extends Controller // Ganti nama controller menjadi GajiController
{
    function index()
    {
        $data = Gaji::all(); // Ambil semua data gaji
        return view('halaman_gaji.tables', ['gaji' => $data]); // Ganti nama view sesuai
    }

    function tambah()
    {
        return view('halaman_gaji.tambah'); // Ganti nama view sesuai
    }

    function tambahReq(Request $request)
    {
        $request->validate([
            'bulan' => 'required',
            'nama_pegawai' => 'required|min:4',
            'nip' => 'required',
            'jabatan' => 'required',
            'gaji' => 'required|numeric',
            'tukin' => 'required|numeric',
            'transport' => 'required|numeric',
            'uang_makan' => 'required|numeric',
            'koperasi' => 'required|numeric',
            'ptwp' => 'required|numeric',
            'ikahi' => 'required|numeric',
            'ipaspi' => 'required|numeric',
            'pphim' => 'required|numeric',
            'dharmayukti' => 'required|numeric',
            'infaq_mesjid' => 'required|numeric',
            'pot_lain_lain' => 'required|numeric',
            'jumlah_pot' => 'required|numeric',
            'jumlah_akhir' => 'required|numeric',
        ], [
            'bulan.required' => 'Bulan Wajib Di isi',
            'nama_pegawai.required' => 'Nama Pegawai Wajib Di isi',
            'nip.required' => 'NIP Wajib Di isi',
            'jabatan.required' => 'Jabatan Wajib Di isi',
            'gaji.required' => 'Gaji Wajib Di isi',
            'gaji.numeric' => 'Gaji harus berupa angka',
            // Tambahkan pesan kesalahan lainnya sesuai kebutuhan
        ]);

        Gaji::create([ // Gunakan create() untuk menyimpan data
            'bulan' => $request->bulan,
            'nama_pegawai' => $request->nama_pegawai,
            'nip' => $request->nip,
            'jabatan' => $request->jabatan,
            'gaji' => $request->gaji,
            'tukin' => $request->tukin,
            'transport' => $request->transport,
            'uang_makan' => $request->uang_makan,
            'koperasi' => $request->koperasi,
            'ptwp' => $request->ptwp,
            'ikahi' => $request->ikahi,
            'ipaspi' => $request->ipaspi,
            'pphim' => $request->pphim,
            'dharmayukti' => $request->dharmayukti,
            'infaq_mesjid' => $request->infaq_mesjid,
            'pot_lain_lain' => $request->pot_lain_lain,
            'jumlah_pot' => $request->jumlah_pot,
            'jumlah_akhir' => $request->jumlah_akhir,
            'jumlah' => $request->gaji + $request->tukin + $request->transport + $request->uang_makan - $request->jumlah_pot, // Hitung jumlah
        ]);

        Session::flash('success', 'Data gaji berhasil ditambahkan');

        return redirect('/mastercontrol'); // Ganti URL sesuai kebutuhan
    }

    function edit($id)
    {
        $data = Gaji::findOrFail($id); // Ambil data gaji berdasarkan ID
        return view('halaman_gaji.edit', ['gaji' => $data]); // Ganti nama view sesuai
    }

    function editReq(Request $request)
    {
        $request->validate([
            'bulan' => 'required',
            'nama_pegawai' => 'required|min:4',
            'nip' => 'required',
            'jabatan' => 'required',
            'gaji' => 'required|numeric',
            'tukin' => 'required|numeric',
            'transport' => 'required|numeric',
            'uang_makan' => 'required|numeric',
            'koperasi' => 'required|numeric',
            'ptwp' => 'required|numeric',
            'ikahi' => 'required|numeric',
            'ipaspi' => 'required|numeric',
            'pphim' => 'required|numeric',
            'dharmayukti' => 'required|numeric',
            'infaq_mesjid' => 'required|numeric',
            'pot_lain_lain' => 'required|numeric',
            'jumlah_pot' => 'required|numeric',
            'jumlah_akhir' => 'required|numeric',
        ]);

        $gaji = Gaji::findOrFail($request->id); // Cari data gaji berdasarkan ID

        $gaji->bulan = $request->bulan;
        $gaji->nama_pegawai = $request->nama_pegawai;
        $gaji->nip = $request->nip;
        $gaji->jabatan = $request->jabatan;
        $gaji->gaji = $request->gaji;
        $gaji->tukin = $request->tukin;
        $gaji->transport = $request->transport;
        $gaji->uang_makan = $request->uang_makan;
        $gaji->koperasi = $request->koperasi;
        $gaji->ptwp = $request->ptwp;
        $gaji->ikahi = $request->ikahi;
        $gaji->ipaspi = $request->ipaspi;
        $gaji->pphim = $request->pphim;
        $gaji->dharmayukti = $request->dharmayukti;
        $gaji->infaq_mesjid = $request->infaq_mesjid;
        $gaji->pot_lain_lain = $request->pot_lain_lain;
        $gaji->jumlah_pot = $request->jumlah_pot;
        $gaji->jumlah_akhir = $request->jumlah_akhir;
        $gaji->jumlah = $request->gaji + $request->tukin + $request->transport + $request->uang_makan - $request->jumlah_pot; // Hitung jumlah
        // Tambahkan kolom lainnya sesuai kebutuhan

        $gaji->save();

        Session::flash('success', 'Data gaji berhasil diedit');

        return redirect('/mastercontrol'); // Ganti URL sesuai kebutuhan
    }

    function hapus(Request $request)
    {
        Gaji::where('id', $request->id)->delete(); // Hapus data gaji berdasarkan ID

        Session::flash('success', 'Data gaji berhasil dihapus');

        return redirect('/mastercontrol'); // Ganti URL sesuai kebutuhan
    }
}
