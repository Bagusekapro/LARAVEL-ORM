<?php


use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePenduduksTable extends Migration
{
    public function up(): void
    {
        Schema::create('penduduks', function (Blueprint $table) {
            $table->id();
            $table->string('nama');
            $table->string('nik')->unique();
            $table->date('tanggal_lahir');
            $table->string('jenis_kelamin');
            $table->unsignedBigInteger('keluarga_id'); // Foreign key field
            $table->integer('role');
            $table->timestamps();

            $table->foreign('keluarga_id')->references('id')->on('keluargas')->onDelete('cascade');
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('penduduks');
    }
}




