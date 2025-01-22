<?php

// app/Models/Keluarga.php
namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Keluarga extends Model
{
    use HasFactory;

    protected $fillable = [
        'nama_keluarga',
    ];

    // Relationships
    public function penduduks()
    {
        return $this->hasMany(Penduduk::class);
    }
}


