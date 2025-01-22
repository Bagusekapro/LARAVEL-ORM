<?php

namespace Database\Factories;

use App\Models\FasilitasDesa;
use Illuminate\Database\Eloquent\Factories\Factory;

class FasilitasDesaFactory extends Factory
{

    public function definition()
    {
        return [
            'nama_fasilitas' => $this->faker->word,
            'jenis_fasilitas' => $this->faker->word,
            'lokasi' => $this->faker->address,
        ];
    }
}


