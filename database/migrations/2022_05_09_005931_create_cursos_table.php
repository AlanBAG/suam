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
        Schema::create('cursos', function (Blueprint $table) {
            $table->id();
            $table->string('instructor', 100);
            $table->string('nombreCurso', 250);
            $table->string('aula', 50);
            $table->integer('cupo');
            $table->string('horario', 250);
            $table->string('ciclo', 10);
            $table->integer('hora1');
            $table->integer('hora2');
            $table->integer('hora3');
            $table->smallInteger('activo');
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
        Schema::dropIfExists('cursos');
    }
};
