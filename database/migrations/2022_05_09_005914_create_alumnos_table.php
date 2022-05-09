<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('alumnos', function (Blueprint $table) {
            $table->id();
            $table->string('nombre', 50);
            $table->string('apellidoPaterno', 50);
            $table->string('apellidoMaterno', 50);
            $table->date('fechaNacimiento');
            $table->string('domicilio', 250);
            $table->string('colonia', 100);
            $table->string('sector', 50);
            $table->integer('cp');
            $table->string('municipio', 50);
            $table->string('estado', 150);
            $table->string('ine', 255);
            $table->string('telCasa', 50);
            $table->string('telCelular', 50);
            $table->string('email', 100);
            $table->string('escolaridad', 50);
            $table->string('estadoCivil', 50);
            $table->string('contacto', 250);
            $table->string('jubilado', 2);
            $table->string('institucionJubilacion', 150);
            $table->string('equipo', 30);
            $table->string('internet', 3);
            $table->timestamps();
            $table->tinyInteger('activo');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('alumnos');
    }
};
