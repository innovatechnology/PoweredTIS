<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CrateSegimientoTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('seguimiento', function (Blueprint $table) {
            $table->increments('id');
            $table->string('nombre', 40);
            $table->integer('ci');
            $table->string('facultad', 40);
            $table->string('carrera', 40);
            $table->string('departamento', 40);
            $table->string('materias', 40);
            $table->integer('sigla');
            $table->integer('hrP');
            $table->integer('hrT');
            $table->boolean('anual');
            $table->boolean('semestral');
            $table->string('categoriaDocente', 40);
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
        Schema::dropIfExists('seguimiento');
    }
}
