<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
// masukan MODEL
class siswa extends Model
{
    use HasFactory;
    protected $table = "siswa";
    protected $fillable = ['id', 'nomor_induk', 'nama', 'alamat', 'foto', 'jabatan_id', 'carolsel1', 'carolsel2', 'carolsel3', 'bg1', 'bg2', 'bg3'];


    public function jabatan()
    {
        return $this->belongsTo(jabatan::class);
    }
}
