<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Berita extends Model
{
    use HasFactory;
    protected $table = 'berita';
    protected $guarded = ['id'];

    public function getFotoAttribute($value)
    {
        if ($value && file_exists(public_path('berita/' . $value))) {
            return url('/berita/' . $value);
        } else {
            return url('/sample_berita/default.jpg');
        }
    }

    public function user()
    {
        return $this->belongsTo(User::class);
    }
}
