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
        Schema::create('editorial', function (Blueprint $table) {
            $table->id('edi_id');
            $table->string('edi_nombre', 250);
            $table->string('edi_ruc', 250)->nullable();
            $table->string('edi_direccion', 250)->nullable();
            $table->string('edi_telefono', 250)->nullable();
            $table->string('edi_celular', 250)->nullable();
            $table->string('edi_pais', 250)->nullable();
            $table->string('edi_provincia', 250)->nullable();
            $table->string('edi_ciudad', 250)->nullable();
            $table->string('edi_codigo_postal', 250)->nullable();
            $table->string('edi_sitio_web', 250)->nullable();
            $table->string('edi_instagram', 250)->nullable();
            $table->string('edi_facebook', 250)->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('editorial');
    }
};
