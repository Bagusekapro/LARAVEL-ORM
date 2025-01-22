<?php

namespace Database\Factories;

use App\Models\Penduduk;
use App\Models\Keluarga;
use Illuminate\Database\Eloquent\Factories\Factory;

class PendudukFactory extends Factory
{

    public function definition()
    {
        return [
            'nama' => $this->faker->name,
            'nik' => $this->faker->unique()->numerify('###############'),
            'tanggal_lahir' => $this->faker->date(),
            'jenis_kelamin' => $this->faker->randomElement(['Laki-laki', 'Perempuan']),
            'keluarga_id' => Keluarga::all()->random()->id,
            'role' => $this->faker->numberBetween(1, 5),
        ];
    }
}




