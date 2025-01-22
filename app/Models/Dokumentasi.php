<?php

// app/Models/Dokumentasi.php
namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Dokumentasi extends Model
{
    use HasFactory;

    protected $fillable = [
        'gambarable_id',
        'gambarable_type',
        'url_gambar'
    ];

    // Relationships

    public function gambar (){
        return $this->morphTo();
    }

}
