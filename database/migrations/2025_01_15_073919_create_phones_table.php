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
        // Membuat tabel phones untuk menyimpan data nomor telepon terkait dengan pengguna
        Schema::create('phones', function (Blueprint $table) {
            // Menambahkan kolom id sebagai primary key untuk tabel phones
            // Kolom ini akan otomatis memiliki auto-increment oleh Laravel
            $table->id();
            
            // Menambahkan kolom user_id yang merujuk ke id pada tabel users
            // Ini menunjukkan bahwa setiap nomor telepon terkait dengan satu pengguna tertentu
            $table->unsignedBigInteger('user_id');
            
            // Menambahkan kolom phone untuk menyimpan nomor telepon
            // Kolom ini akan menyimpan informasi nomor telepon pengguna
            $table->string('phone');
            
            // Menambahkan kolom timestamps untuk menyimpan waktu pembuatan dan pembaruan
            // Kolom created_at dan updated_at akan otomatis dikelola oleh Laravel
            $table->timestamps();

            // Menambahkan foreign key constraint antara user_id dan id pada tabel users
            // Jika pengguna dihapus, maka nomor telepon yang terkait akan dihapus secara otomatis (onDelete cascade)
            $table->foreign('user_id')->references('id')->on('users')->onDelete('cascade');
        });
    }

    /**
     * Membalikkan migrasi untuk menghapus tabel.
     *
     * @return void
     */
    public function down()
    {
        // Menghapus tabel phones jika migrasi dibatalkan
        Schema::dropIfExists('phones');
    }
};
