<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class client extends Model
{
    use HasFactory;

    protected $table = "client";
    protected $fillable = ['nama', 'komen', 'foto', 'updated_at', 'created_at'];
}
