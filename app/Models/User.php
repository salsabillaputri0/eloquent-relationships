<?php

namespace App\Models;

// Mengimpor kelas dan trait yang digunakan oleh model User
// use Illuminate\Contracts\Auth\MustVerifyEmail; // Opsional, digunakan jika verifikasi email diaktifkan
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Laravel\Sanctum\HasApiTokens;

class User extends Authenticatable
{
    // Menggunakan trait HasApiTokens, HasFactory, dan Notifiable
    // HasApiTokens untuk mendukung API token dalam autentikasi
    // HasFactory untuk memanfaatkan factory dalam pembuatan data tiruan
    // Notifiable memungkinkan pengguna untuk menerima pemberitahuan (notifications)
    use HasApiTokens, HasFactory, Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * Menyatakan atribut yang dapat diisi secara massal (mass-assigned) melalui form atau API
     * Atribut yang disebutkan di sini hanya yang dapat diisi secara massal untuk mencegah kerentanannya
     * terhadap serangan mass-assignment.
     *
     * @var array<int, string>
     */
    protected $fillable = [
        'name',
        'email',
        'password',
    ];

    /**
     * The attributes that should be hidden for serialization.
     *
     * Menyatakan atribut yang tidak akan ditampilkan ketika model ini diserialisasi
     * Contoh: menyembunyikan password dan token ingat (remember_token)
     *
     * @var array<int, string>
     */
    protected $hidden = [
        'password',
        'remember_token',
    ];

    /**
     * The attributes that should be cast.
     *
     * Menyatakan atribut yang harus di-cast ke tipe data tertentu
     * Sebagai contoh, 'email_verified_at' akan diubah menjadi tipe datetime
     *
     * @var array<string, string>
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
    ];
    
    /**
     * phone
     *
     * Mendefinisikan relasi antara model User dengan model Phone
     * Setiap user dapat memiliki satu nomor telepon (relasi One-to-One)
     *
     * @return \Illuminate\Database\Eloquent\Relations\HasOne
     */
    public function phone()
    {
        // Menghubungkan model User ke model Phone dengan relasi hasOne
        return $this->hasOne(Phone::class);
    }
    
    /**
     * roles
     *
     * Mendefinisikan relasi banyak ke banyak antara model User dan model Role
     * Setiap user dapat memiliki banyak role, dan setiap role dapat dimiliki oleh banyak user
     * Relasi ini ditangani melalui tabel pivot 'user_role'
     *
     * @return \Illuminate\Database\Eloquent\Relations\BelongsToMany
     */
    public function roles()
    {
        // Menghubungkan model User ke model Role melalui tabel pivot 'user_role'
        return $this->belongsToMany(Role::class, 'user_role');
    }
}
