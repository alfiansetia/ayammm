<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;
use App\Models\Image;

class ayam extends Model
{
    use HasFactory;
    protected $table = "ayam";
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
    public function detail($id)
    {
        return DB::table('ayam', 'jenis_ayam')->where('id', $id)->first();
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
