<?php

namespace App\Http\Controllers;

use App\Models\Gaji;
use App\Models\Role;
use App\Models\Todo;
use Illuminate\View\View;

class AdminController extends Controller
{
    private $todo;
    private $gaji;
    private $role;

    // Menambahkan dependensi untuk model Role
    public function __construct(Todo $todo, Gaji $gaji, Role $role)
    {
        $this->todo = $todo;
        $this->gaji = $gaji;
        $this->role = $role;  // Menyimpan instance model Role
    }

    public function index(): View
    {
        // Menghitung jumlah role
        $totalPeople = $this->role->count();  // Menghitung jumlah total orang
        $adminCount = $this->role->where('role', 'admin')->count();  // Menghitung jumlah admin
        $userCount = $this->role->where('role', 'user')->count();  // Menghitung jumlah user

        // Mengirim data ke view
        return view('point_akses.admin.admin', [
            'allPeople' => $totalPeople,  // Total orang
            'admin' => $adminCount,       // Jumlah admin
            'user' => $userCount,         // Jumlah user
            'list' => $this->todo->all(), // Daftar todo
            'toma' => $this->gaji->count(), // Jumlah data gaji
        ]);
    }
}
