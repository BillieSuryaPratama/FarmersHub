<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Akun extends Model
{
    use HasFactory;
    protected $table = 'user';
    protected $primaryKey = 'user_id';
    public $timestamps = true;
    protected $fillable = [
        'username',
        'email',
        'password',
        'role',
        'status',
    ];

    public function Keranjang(){
        return $this->hasOne(Keranjang::class, 'user_id');
    }

    public function PermohonanUpgrade(){
        return $this->hasMany(PermohonanUpgrade::class, 'user_id');
    }

    public function Produk(){
        return $this->hasMany(Produk::class, 'user_id');
    }

    public function Transaksi(){
        return $this->hasMany(Transaksi::class, 'user_id');
    }
}
