<?php

namespace Database\Factories;

use App\Models\Keluarga;
use Illuminate\Database\Eloquent\Factories\Factory;

class KeluargaFactory extends Factory
{

    public function definition()
    {
        return [
            'nama_keluarga' => $this->faker->lastName . ' Family',
        ];
    }
}

