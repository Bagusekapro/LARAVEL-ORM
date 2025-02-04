<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Penduduk;
use App\Models\Keluarga;
use App\Models\KegiatanDesa;
use App\Models\Dokumentasi;
use App\Models\FasilitasDesa;
use App\Models\User;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {

        User::factory(100)->create();
        $keluargas = Keluarga::factory(10)->create();
        Penduduk::factory(100)->create();

        foreach ($keluargas as $keluarga) {
            $penduduk = Penduduk::factory(rand(3,5))->create([
                'keluarga_id' =>$keluarga->id,
            ]);
        }
        FasilitasDesa::factory(20)->create();
        KegiatanDesa::factory(50)->create();
        Dokumentasi::factory(100)->create();
}}
