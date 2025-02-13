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
        // Membuat tabel comments untuk menyimpan komentar yang berkaitan dengan post
        Schema::create('comments', function (Blueprint $table) {
            // Menambahkan kolom id sebagai primary key untuk tabel comments
            // Kolom ini akan otomatis di-generate oleh Laravel sebagai kolom unik
            $table->id();
            
            // Menambahkan kolom post_id yang merupakan relasi ke tabel posts
            // Kolom ini akan merujuk ke id pada tabel posts
            $table->unsignedBigInteger('post_id');
            
            // Menambahkan kolom comment untuk menyimpan teks komentar
            // Kolom ini akan menyimpan isi komentar yang ditulis oleh pengguna
            $table->text('comment');
            
            // Menambahkan kolom timestamps untuk mencatat waktu pembuatan dan pembaruan komentar
            $table->timestamps();

            // Mendefinisikan relasi antara post_id dan id pada tabel posts
            // Jika sebuah post dihapus, maka semua komentar terkait juga akan dihapus secara otomatis (onDelete cascade)
            $table->foreign('post_id')->references('id')->on('posts')->onDelete('cascade');
        });
    }

    /**
     * Membalikkan migrasi untuk menghapus tabel.
     *
     * @return void
     */
    public function down()
    {
        // Menghapus tabel comments jika migrasi dibatalkan
        Schema::dropIfExists('comments');
    }
};
