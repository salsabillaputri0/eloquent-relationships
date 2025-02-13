<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Comment extends Model
{
    // Menggunakan trait HasFactory untuk memanfaatkan fitur pabrik (factory) pada model ini
    use HasFactory;
    
    /**
     * post
     *
     * Mendefinisikan relasi antara model Comment dengan model Post
     * 
     * Setiap komentar (Comment) berhubungan dengan satu post (Post).
     * Fungsi ini menunjukkan bahwa Comment "belongs to" (milik) sebuah Post.
     *
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function post()
    {
        // Menyatakan bahwa setiap komentar milik satu post tertentu
        // Menggunakan relasi belongsTo untuk menghubungkan Comment ke Post
        return $this->belongsTo(Post::class);
    }
}
