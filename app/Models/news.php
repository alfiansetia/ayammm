<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class news extends Model
{
    use HasFactory;
    protected $table = "berita";
    protected $fillable = ['id', 'user', 'tanggal', 'isi', 'foto'];
}
