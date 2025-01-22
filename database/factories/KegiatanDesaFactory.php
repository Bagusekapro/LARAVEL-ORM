<?php

namespace Database\Factories;

use App\Models\KegiatanDesa;
use App\Models\Penduduk;
use Illuminate\Database\Eloquent\Factories\Factory;

class KegiatanDesaFactory extends Factory
{

    public function definition()
    {
        return [
            'penduduk_id' => Penduduk::all()->random()->id,
            'nama_kegiatan' => $this->faker->sentence,
            'tanggal_pelaksanaan' => $this->faker->date(),
            'deskripsi' => $this->faker->paragraph,
        ];
    }
}



