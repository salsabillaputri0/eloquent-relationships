<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Phone extends Model
{
    // Menggunakan trait HasFactory untuk memanfaatkan fitur pabrik (factory) pada model ini
    use HasFactory;
    
    /**
     * user
     *
     * Mendefinisikan relasi antara model Phone dengan model User
     * 
     * Setiap nomor telepon (Phone) berhubungan dengan satu pengguna (User).
     * Fungsi ini menunjukkan bahwa Phone "belongs to" (milik) sebuah User.
     *
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function user()
    {
        // Menyatakan bahwa setiap nomor telepon milik satu pengguna tertentu
        // Menggunakan relasi belongsTo untuk menghubungkan Phone ke User
        return $this->belongsTo(User::class);
    }
}
