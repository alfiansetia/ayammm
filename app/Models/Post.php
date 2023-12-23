<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Image;

class Post extends Model
{
    use HasFactory;
    protected $guarded = ['id'];

    public function ayam()
    {
        return $this->belongsTo(Ayam::class);
    }
}
