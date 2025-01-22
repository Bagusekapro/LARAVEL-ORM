<?php

// app/Models/KegiatanDesa.php
namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class KegiatanDesa extends Model
{
    use HasFactory;

    protected $fillable = [
        'penduduk_id',
        'nama_kegiatan',
        'tanggal_pelaksanaan',
        'deskripsi'
    ];

    // Relationships
    public function penduduk()
    {
        return $this->belongsTo(Penduduk::class);
    }

    public function dokumentasi()
    {
        return $this->morphMany(Dokumentasi::class,'gambarable');
    }
}

