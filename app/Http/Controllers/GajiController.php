<?php

namespace App\Http\Controllers;

use App\Models\Gaji;
use Illuminate\Http\Request;

class GajiController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $gaji = Gaji::all();
        return view('gaji.index', compact('gaji'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('gaji.create'); // Sesuaikan dengan nama view untuk form create
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        // Validasi input
        $request->validate([
            'bulan' => 'required|string|max:255',
            'nama_pegawai' => 'required|string|max:255',
            'nip' => 'required|integer',
            'jabatan' => 'required|string|max:255',
            'gaji' => 'required|numeric',
            'tukin' => 'required|numeric',
            'transport' => 'required|numeric',
            'uang_makan' => 'required|numeric',
            'jumlah' => 'required|numeric',
            'koperasi' => 'required|numeric',
            'ptwp' => 'required|numeric',
            'ikahi' => 'required|numeric',
            'ipaspi' => 'required|numeric',
            'dana_sosial' => 'required|numeric',
            'pphim' => 'required|numeric',
            'infaq_mesjid' => 'required|numeric',
            'pot_lain_lain' => 'required|numeric',
            'jumlah_pot' => 'required|numeric',
            'jumlah_akhir' => 'required|numeric',
        ]);

        Gaji::create($request->all());
        return redirect()->route('gaji.index')
            ->with('success', 'Gaji created successfully.');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        // Jika Anda ingin menampilkan detail dari gaji tertentu
        $gaji = Gaji::findOrFail($id);
        return view('gaji.show', compact('gaji')); // Sesuaikan dengan nama view untuk detail
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        // Mengambil semua data gaji dari database
        $gaji = Gaji::all();
        // Mengembalikan view dengan data gaji
        return view('gaji.index', compact('gaji'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $gaji = Gaji::all($id); // Temukan data gaji berdasarkan ID

        // Validasi input
        $request->validate([
            'bulan' => 'required|string|max:255',
            'nama_pegawai' => 'required|string|max:255',
            'nip' => 'required|integer',
            'jabatan' => 'required|string|max:255',
            'gaji' => 'required|numeric',
            'tukin' => 'required|numeric',
            'transport' => 'required|numeric',
            'uang_makan' => 'required|numeric',
            'jumlah' => 'required|numeric',
            'koperasi' => 'required|numeric',
            'ptwp' => 'required|numeric',
            'ikahi' => 'required|numeric',
            'ipaspi' => 'required|numeric',
            'dana_sosial' => 'required|numeric',
            'pphim' => 'required|numeric',
            'infaq_mesjid' => 'required|numeric',
            'pot_lain_lain' => 'required|numeric',
            'jumlah_pot' => 'required|numeric',
            'jumlah_akhir' => 'required|numeric',
        ]);

        $gaji->update($request->all()); // Perbarui data gaji dengan input baru

        return redirect()->route('gaji.index')
            ->with('success', 'Gaji updated successfully.');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $gaji = Gaji::findOrFail($id); 
        $gaji->delete(); 

        return redirect()->route('gaji.index')
            ->with('success', 'Gaji deleted successfully.');
    }
}
