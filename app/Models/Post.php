<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Image;

class Post extends Model
{
    use HasFactory;
    protected $fillable = [
        'jenis_ayam_id',
        'kode_ayam',
        'berat',
        'status',
        'usia',
        'kategori_id',
        'deskripsi',
        'cover',
    ];
    public function kategori()
    {

        return $this->belongsTo(kategori::class);
    }
    public function jenis_ayam()
    {

        return $this->belongsTo(jenis_ayam::class);
    }

    public function images()
    {
        return $this->hasMany(Image::class);
    }
    public function keranjang()
    {

        return $this->hasMany(keranjang::class);
        // return $this->belongsTo(keranjang::class);
    }
}
