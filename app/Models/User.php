<?php

namespace App\Models;

use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Laravel\Sanctum\HasApiTokens;

class User extends Authenticatable
{
    use HasApiTokens, Notifiable;

    protected $table = 'user';      // pakai tabel 'user'
    protected $primaryKey = 'user_id'; // primary key sesuai migrasi
    public $timestamps = true;

    protected $fillable = [
        'username',
        'email',
        'password',
        'role',
        'status',
    ];

    protected $hidden = [
        'password',
        'remember_token',
    ];

    // relasi dari model Akun
    public function keranjang()
    {
        return $this->hasOne(Keranjang::class, 'user_id');
    }

    public function permohonanUpgrade()
    {
        return $this->hasMany(PermohonanUpgrade::class, 'user_id');
    }

    public function produk()
    {
        return $this->hasMany(Produk::class, 'user_id');
    }

    public function transaksi()
    {
        return $this->hasMany(Transaksi::class, 'user_id');
    }
}
