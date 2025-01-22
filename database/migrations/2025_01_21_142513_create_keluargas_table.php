<?php

// database/migrations/xxxx_xx_xx_create_keluargas_table.php
use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateKeluargasTable extends Migration
{
    public function up()
    {
        Schema::create('keluargas', function (Blueprint $table) {
            $table->id();
            $table->string('nama_keluarga');
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('keluargas');
    }
}


