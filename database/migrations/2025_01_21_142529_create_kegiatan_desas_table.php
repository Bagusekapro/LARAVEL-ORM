<?php

// database/migrations/xxxx_xx_xx_create_kegiatan_desas_table.php
use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateKegiatanDesasTable extends Migration
{
    public function up()
    {
        Schema::create('kegiatan_desas', function (Blueprint $table) {
            $table->id();
            $table->foreignId('penduduk_id')->constrained('penduduks')->onDelete('cascade');
            $table->string('nama_kegiatan');
            $table->date('tanggal_pelaksanaan');
            $table->text('deskripsi')->nullable();
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('kegiatan_desas');
    }
}


