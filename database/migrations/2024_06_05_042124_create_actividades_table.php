<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up()
    {
        Schema::create('actividades', function (Blueprint $table) {
            $table->id('id_actividad');
            $table->unsignedBigInteger('id_leccion');
            $table->enum('tipo_actividad', ['EMU']);
            $table->string('contenido', 255)->nullable();
            $table->foreign('id_leccion')->references('id_leccion')->on('lecciones');
            $table->timestamps();
        });
    }
    


    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('actividades');
    }
};
