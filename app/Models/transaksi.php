<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class transaksi extends Model
{
    use HasFactory;
    protected $table = "transaksi";
    protected $fillable = ['id', 'nama', 'alamat', 'no_telp', 'status', 'h_jual', 'kode_ayam', 'cover', 'kode_ayam',];
}
