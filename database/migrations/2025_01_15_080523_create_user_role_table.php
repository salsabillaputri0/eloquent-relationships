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
        // Membuat tabel user_role untuk menyimpan relasi Many to Many antara users dan roles
        Schema::create('user_role', function (Blueprint $table) {
            // Menambahkan kolom user_id dengan tipe data unsignedBigInteger
            // Ini adalah kolom yang akan merujuk ke id pada tabel users
            $table->unsignedBigInteger('user_id');
            
            // Menambahkan kolom role_id dengan tipe data unsignedBigInteger
            // Ini adalah kolom yang akan merujuk ke id pada tabel roles
            $table->unsignedBigInteger('role_id');
            
            // Mendefinisikan relasi antara user_id dengan id pada tabel users
            // Ketika user dihapus, maka data di tabel user_role akan dihapus (onDelete cascade)
            $table->foreign('user_id')->references('id')->on('users')->onDelete('cascade');
            
            // Mendefinisikan relasi antara role_id dengan id pada tabel roles
            // Ketika role dihapus, maka data di tabel user_role akan dihapus (onDelete cascade)
            $table->foreign('role_id')->references('id')->on('roles')->onDelete('cascade');
        });
    }

    /**
     * Membalikkan migrasi untuk menghapus tabel.
     *
     * @return void
     */
    public function down()
    {
        // Menghapus tabel user_role jika migrasi dibatalkan
        Schema::dropIfExists('user_role');
    }
};
