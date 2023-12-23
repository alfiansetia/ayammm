<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class JenisAyam extends Model
{
    use HasFactory;

    protected $table = 'jenis_ayam';

    protected $primaryKey = 'id';

    protected $guarded = ['id'];

    public function ayams()
    {
        return $this->hasMany(Ayam::class);
    }
}
