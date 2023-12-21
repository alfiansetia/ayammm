<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class jenis_ayam extends Model
{
    use HasFactory;
    protected $table = "jenis_ayam";
    protected $primaryKey = "id";
    protected $fillable = ['id', 'jenis_ayam'];

    public function Post()
    {
        return $this->hasMany(Post::class);
    }
}
