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
        // Membuat tabel posts untuk menyimpan data artikel atau postingan
        Schema::create('posts', function (Blueprint $table) {
            // Menambahkan kolom id sebagai primary key untuk tabel posts
            // Laravel akan secara otomatis memberikan auto-increment untuk kolom ini
            $table->id();
            
            // Menambahkan kolom title untuk menyimpan judul post
            // Kolom ini bertipe string yang akan menyimpan teks judul dari post
            $table->string('title');
            
            // Menambahkan kolom content untuk menyimpan isi konten dari post
            // Kolom ini bertipe text untuk memungkinkan penyimpanan teks panjang
            $table->text('content');
            
            // Menambahkan kolom timestamps untuk menyimpan waktu pembuatan dan pembaruan post
            // Kolom ini akan otomatis mengelola waktu pembuatan (created_at) dan pembaruan (updated_at) dari setiap post
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
        // Menghapus tabel posts jika migrasi dibatalkan
        Schema::dropIfExists('posts');
    }
};
