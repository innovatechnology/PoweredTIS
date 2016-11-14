<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class Universidad extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        //facultad
        Schema::create('facultad', function(Blueprint $table)
            {
                $table->increments('idfacultad');
                $table->string('nombre', 40);
                $table->string('descripcion', 300);

                $table->dropPrimary('iddepartamento');

                $table->primary('iddepartamento');
            });
        //departamento
        Schema::create('departamento', function(Blueprint $table)
            {
                $table->increments('iddepartamento');
                $table->string('nombre', 40);
                $table->string('descripcion', 300);
                $table->integer('facultad_idfacultad')->unsigned();

                $table->dropPrimary('iddepartamento');

                $table->primary('iddepartamento');
                $table->foreign('facultad_idfacultad')->references('idfacultad')->on('facultad');
            });
        //materia

        Schema::create('idmateria', function(Blueprint $table)
            {
                $table->increments('idmateria');
                $table->string('nombre', 40);
                $table->string('descripcion', 300);
                $table->integer('departamento_iddepartamento')->unsigned();

                $table->dropPrimary('ididmateria');

                $table->primary('ididmateria');
                $table->foreign('departamento_iddepartamento')->references('iddepartamento')->on('departamento');
            });
        //materia
        Schema::create('idcarrera', function(Blueprint $table)
            {
                $table->increments('idcarrera');
                $table->string('nombre', 40);
                $table->string('descripcion', 300);
                $table->integer('departamento_iddepartamento')->unsigned();

                $table->dropPrimary('ididcarrera');

                $table->primary('ididcarrera');
                $table->foreign('departamento_iddepartamento')->references('iddepartamento')->on('departamento');
            });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        //
    }
}
