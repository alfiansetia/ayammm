<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Post;
use App\Models\kategori;
use App\Models\ayam;

class Image extends Model
{
    use HasFactory;
    protected $guarded = ['id'];


    public function getImageAttribute($value)
    {
        if ($value && file_exists(public_path('images/' . $value))) {
            return url('/images/' . $value);
        } else {
            return url('/sample_images/default.jpg');
        }
    }

    public function ayam()
    {
        return $this->belongsTo(ayam::class);
    }
}
