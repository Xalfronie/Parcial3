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
        Schema::create('lecciones', function (Blueprint $table) {
            $table->id('id_leccion');
            $table->unsignedBigInteger('id_materia');
            $table->string('titulo', 50);
            $table->string('descripcion', 255)->nullable();
            $table->foreign('id_materia')->references('id_materia')->on('materias');
            $table->timestamps();
        });
    }
    


    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('lecciones');
    }
};
