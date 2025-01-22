<?php

namespace Database\Factories;

use App\Models\Dokumentasi;
use App\Models\FasilitasDesa;
use App\Models\KegiatanDesa;
use App\Models\Penduduk;
use Illuminate\Database\Eloquent\Factories\Factory;

class DokumentasiFactory extends Factory
{

    public function definition()
    {
        return [
            'gambarable_id'=>fake()->randomElement([
                Penduduk::all()->random()->id,
                KegiatanDesa::all()->random()->id,
                FasilitasDesa::all()->random()->id,
            ]),
            'gambarable_type'=>fake()->randomElement([Penduduk::class, KegiatanDesa::class, FasilitasDesa::class]),

            'url_gambar'=>fake()->url(),
        ];
    }
}



