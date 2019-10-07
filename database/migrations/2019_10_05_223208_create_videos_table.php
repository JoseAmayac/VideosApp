<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateVideosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('videos', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('nombre',64);
            $table->string('duracion',20);
            $table->string('descripcion');
            $table->unsignedbigInteger('categorias_id');
            $table->unsignedBigInteger('users_id');
            $table->integer('calificacion');
            $table->integer('numero_vistas');
            $table->foreign('categorias_id')->references('id')->on('categorias');
            $table->foreign('users_id')->references('id')->on('users');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('videos');
    }
}
