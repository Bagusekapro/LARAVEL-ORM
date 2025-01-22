<?php

// app/Models/FasilitasDesa.php
namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Psy\CodeCleaner\ReturnTypePass;

class FasilitasDesa extends Model
{
    use HasFactory;

    protected $fillable = [
        'nama_fasilitas',
        'jenis_fasilitas',
        'lokasi'
    ];

    public function dokumentasi(){
        return $this->morphMany(Dokumentasi::class,'gambarable');
    }

}
