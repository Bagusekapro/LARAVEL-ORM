<?php


use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateDokumentasisTable extends Migration
{
    public function up()
    {
        Schema::create('dokumentasis', function (Blueprint $table) {
            $table->id();
            $table->foreignId('gambarable_id');
            $table->string('gambarable_type');
            $table->string('url_gambar');
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('dokumentasis');
    }
}

