<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    // Menggunakan trait HasFactory untuk memanfaatkan fitur pabrik (factory) pada model ini
    use HasFactory;
    
    /**
     * comments
     *
     * Mendefinisikan relasi antara model Post dengan model Comment
     * 
     * Setiap post (Post) dapat memiliki banyak komentar (Comment).
     * Fungsi ini menunjukkan bahwa Post "has many" (memiliki banyak) komentar.
     *
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function comments()
    {
        // Menyatakan bahwa setiap post dapat memiliki banyak komentar
        // Menggunakan relasi hasMany untuk menghubungkan Post ke Comment
        return $this->hasMany(Comment::class);
    }
}
