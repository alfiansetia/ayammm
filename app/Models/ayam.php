<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;
use App\Models\Image;

class Ayam extends Model
{
    use HasFactory;
    protected $table = 'ayam';
    protected $guarded = ['id'];

    public function getCoverAttribute($value)
    {
        if ($value && file_exists(public_path('cover/' . $value))) {
            return url('/cover/' . $value);
        } else {
            return url('/sample_cover/default.jpg');
        }
    }

    public function kategori()
    {

        return $this->belongsTo(Kategori::class);
    }
    public function jenis()
    {
        return $this->belongsTo(JenisAyam::class, 'jenis_ayam_id');
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
        return $this->hasMany(Keranjang::class);
    }
}
