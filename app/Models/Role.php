<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Role extends Model
{
    // Menggunakan trait HasFactory untuk memanfaatkan fitur pabrik (factory) pada model ini
    use HasFactory;

    /**
     * users
     *
     * Mendefinisikan relasi banyak ke banyak antara model Role dan model User
     * 
     * Setiap role (Role) dapat dimiliki oleh banyak pengguna (User), 
     * dan setiap pengguna (User) dapat memiliki banyak role (Role).
     * Fungsi ini menunjukkan bahwa Role "belongs to many" (dimiliki oleh banyak) User.
     *
     * @return \Illuminate\Database\Eloquent\Relations\BelongsToMany
     */
    public function users()
    {
        // Menyatakan bahwa sebuah role dapat dimiliki oleh banyak pengguna
        // Menggunakan relasi belongsToMany untuk menghubungkan Role ke User melalui tabel pivot 'user_role'
        return $this->belongsToMany(User::class, 'user_role');
    }
}
