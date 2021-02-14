<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateEstudiantesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('estudiantes', function (Blueprint $table) {
            $table->id();
            $table->string('nombreEstudiante', 100);
            $table->string('apellidoEstudiante', 100);
            $table->char('tipoCedula', 1);
            $table->string('cedulaEstudiante', 20);
            $table->string('direccionEstudiante', 45);
            $table->string('telefonoEstudiante', 15);
            $table->char('generoEstudiante', 1);
            $table->string('correoEstudiante', 100);
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
        Schema::dropIfExists('estudiantes');
    }
}
