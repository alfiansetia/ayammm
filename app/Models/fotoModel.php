<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class fotoModel extends Model
{
    use HasFactory;
    protected $table = "foto";
    protected $fillable = ['id', 'carolsel1', 'carolsel2', 'carolsel3', 'bg1', 'bg2', 'bg3'];
}
