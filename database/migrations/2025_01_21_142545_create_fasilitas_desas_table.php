<?php

// database/migrations/xxxx_xx_xx_create_fasilitas_desas_table.php
use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateFasilitasDesasTable extends Migration
{
    public function up()
    {
        Schema::create('fasilitas_desas', function (Blueprint $table) {
            $table->id();
            $table->string('nama_fasilitas');
            $table->string('jenis_fasilitas');
            $table->string('lokasi');
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('fasilitas_desas');
    }
}

