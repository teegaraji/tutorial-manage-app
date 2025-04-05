<?php

namespace App\Models;

// use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Laravel\Sanctum\HasApiTokens;

class User extends Authenticatable
{
    use HasApiTokens, HasFactory, Notifiable;

    // Kolom yang bisa diisi secara mass-assignment
    protected $fillable = [
        'name',
        'email',
        'password',
    ];

    // Kolom yang disembunyikan saat model dikonversi ke array/json
    protected $hidden = [
        'password',
        'remember_token',
    ];

    // Konversi kolom ke tipe data tertentu
    protected $casts = [
        'email_verified_at' => 'datetime',
    ];

    // Relasi: User bisa punya banyak tutorial
    public function tutorials()
    {
        return $this->hasMany(Tutorial::class, 'creator_email', 'email');
    }
}
