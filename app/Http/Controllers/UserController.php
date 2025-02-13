<?php

namespace App\Http\Controllers;

use App\Models\User;

class UserController extends Controller
{    
    /**
     * index
     *
     * Menampilkan daftar semua pengguna yang ada di database
     *
     * @return void
     */
    public function index()
    {
        // Mendapatkan semua data pengguna (users) dari model User
        // Mengambil data pengguna terbaru berdasarkan waktu dibuat (menggunakan method latest())
        // Method get() digunakan untuk mengambil seluruh data pengguna
        $users = User::latest()->get();

        // Mengirimkan data pengguna ke view 'users'
        // Data pengguna akan tersedia dalam variabel $users di dalam view
        return view('users', compact('users'));
    }
}
