<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Menjalankan migrasi untuk membuat tabel.
     *
     * @return void
     */
    public function up()
    {
        // Membuat tabel roles untuk menyimpan data peran
        Schema::create('roles', function (Blueprint $table) {
            // Menambahkan kolom id yang merupakan primary key untuk tabel roles
            // Laravel akan secara otomatis menganggap kolom ini sebagai primary key
            $table->id();
            
            // Menambahkan kolom name untuk menyimpan nama peran (misalnya, admin, user)
            $table->string('name');
            
            // Menambahkan kolom timestamps yang mencakup created_at dan updated_at
            // Kolom ini akan secara otomatis mengelola waktu pembuatan dan pembaruan data
            $table->timestamps();
        });
    }

    /**
     * Membalikkan migrasi untuk menghapus tabel.
     *
     * @return void
     */
    public function down()
    {
        // Menghapus tabel roles jika migrasi dibatalkan
        Schema::dropIfExists('roles');
    }
};
