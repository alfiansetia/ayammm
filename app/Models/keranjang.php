<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class keranjang extends Model
{
    use HasFactory;

    protected $table = 'keranjang';
    protected $fillable = ['jenis_ayam', 'qty', 'created_by', 'status', 'updated_at', 'created_at'];

    public function Post()
    {
        // return $this->hasMany(Post::class);
        return $this->belongsTo(Post::class);
    }
    public function User()
    {
        return $this->hasMany(User::class);
        // return $this->belongsTo(Post::class);
    }
    public function ayam()
    {
        // return $this->hasMany(Post::class);
        return $this->belongsTo(ayam::class);
    }
}
