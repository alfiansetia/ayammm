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

    public function ayam()
    {
        return $this->belongsTo(ayam::class);
    }
}
