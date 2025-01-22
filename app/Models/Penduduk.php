<?php

// app/Models/Penduduk.php
namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Penduduk extends Model
{
    use HasFactory;

    protected $fillable = [
        'nama',
        'nik',
        'tanggal_lahir',
        'jenis_kelamin',
        'keluarga_id',
        'role'
    ];

    // Relationships
    public function keluarga()
    {
        return $this->belongsTo(Keluarga::class);
    }

    public function kegiatanDesa()
    {
        return $this->hasMany(KegiatanDesa::class);
    }

    public function dokumentasi(){
        return $this->morphMany(Dokumentasi::class,'gambarable');
    }
}

