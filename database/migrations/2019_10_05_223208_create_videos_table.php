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
            $table->unsignedbigInteger('categoria_id');
            $table->string('users_email');
            $table->integer('calificacion');
            $table->integer('numero_vistas');
            $table->foreign('categoria_id')->references('id')->on('categoria');
            $table->foreign('users_email')->references('email')->on('users');
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
