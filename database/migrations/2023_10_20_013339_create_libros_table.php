<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('libros', function (Blueprint $table) {
            $table->id('lib_id');
            
            $table->foreignId('aut_id')->references('aut_id')->on('autor');
            $table->foreignId('edi_id')->references('edi_id')->on('editorial');
            $table->foreignId('usu_id')->references('usu_id')->on('users');
            $table->foreignId('tip_id')->references('tip_id')->on('tipos');
            
            $table->integer('lib_publicacion_tipo');
            $table->string('lib_isbn', 250);
            $table->string('lib_titulo', 250);
            $table->date('lib_fecha_publicacion');
            $table->integer('lib_edicion');
            $table->integer('lib_paginas');
            $table->string('lib_tamano', 250);
            $table->double('lib_precio');
            $table->string('lib_encuadernacion', 250);
            $table->string('lib_soporte', 250);
            $table->string('lib_idioma', 250);
            $table->integer('lib_estado')->default(1);

            $table->timestamps();
        });


    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('libros');
    }
};
