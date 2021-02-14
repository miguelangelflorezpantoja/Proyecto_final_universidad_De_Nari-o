<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateNotasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('notas', function (Blueprint $table) {
            $table->id();
            
            $table->unsignedBigInteger('estudiante');
            $table->foreign('estudiante')->references('id')->on('estudiantes');
            $table->unsignedBigInteger('profesor');
            $table->foreign('profesor')->references('id')->on('profesores');
            $table->unsignedBigInteger('cursos');
            $table->foreign('cursos')->references('id')->on('carreras');
            $table->double('nota');
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
        Schema::dropIfExists('notas');
    }
}
