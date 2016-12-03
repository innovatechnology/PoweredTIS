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

                $table->dropPrimary('idfacultad');

                $table->primary('idfacultad');
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

        Schema::create('materia', function(Blueprint $table)
            {
                $table->increments('idmateria');
                $table->string('nombre', 40);
                $table->string('descripcion', 300);
                $table->string('sigla', 30);
                $table->integer('departamento_iddepartamento')->unsigned();

                $table->dropPrimary('idmateria');

                $table->primary('idmateria');
                $table->foreign('departamento_iddepartamento')->references('iddepartamento')->on('departamento');
            });
        //TABLA materia_grupo
        //no estoy seguro de que tan util es esta tabla
        Schema::create('materia_grupo', function(Blueprint $table)
            {
                $table->increments('idmateria_grupo');
                $table->integer('materia_idmateria')->unsigned();
                $table->integer('idgrupo')->unsigned();

                $table->dropPrimary('idmateria_grupo');

                $table->primary('idmateria_grupo');
                $table->foreign('materia_idmateria')->references('idmateria')->on('materia');
            });
        //carrera
        Schema::create('carrera', function(Blueprint $table)
            {
                $table->increments('idcarrera');
                $table->string('nombre', 40);
                $table->string('descripcion', 300);
                $table->integer('departamento_iddepartamento')->unsigned();

                $table->dropPrimary('idcarrera');

                $table->primary('idcarrera');
                $table->foreign('departamento_iddepartamento')->references('iddepartamento')->on('departamento');
            });

        //nombramiento
        Schema::create('nombramiento', function(Blueprint $table)
            {
                $table->increments('idnombramiento');
                $table->integer('seguimiento_idseguimiento')->unsigned();
                $table->date('fecha_solicitud');
                $table->date('fecha_nombramiento');

                $table->dropPrimary('idnombramiento');

                $table->primary(['idnombramiento', 'seguimiento_idseguimiento']);
                $table->foreign('seguimiento_idseguimiento')->references('idseguimiento')->on('seguimiento');
            });

        //docente
        Schema::create('docente', function(Blueprint $table)
            {
                $table->increments('iddocente');
                $table->string('nombre', 90);
                $table->string('titulo', 300);
                $table->string('diploma_academico', 200);

                $table->dropPrimary('iddocente');

                $table->primary('iddocente');
            });
        Schema::create('seguimiento', function(Blueprint $table)
            {
                $table->increments('idseguimiento');
                $table->integer('docente_iddocente')->unsigned();

                $table->dropPrimary('idseguimiento');
                
                $table->primary(['idseguimiento', 'docente_iddocente']);
                $table->foreign('docente_iddocente')->references('iddocente')->on('docente');
            });
        Schema::create('item_seguimiento', function(Blueprint $table)
            {
                $table->increments('iditem');
                $table->integer('seguimiento_idseguimiento')->unsigned();
                $table->integer('materia_idmateria')->unsigned();
                $table->integer('horas_teoricas');

                $table->dropPrimary('iditem');
                
                $table->primary(['iditem', 'seguimiento_idseguimiento', 'materia_idmateria']);
                $table->foreign('seguimiento_idseguimiento')->references('idseguimiento')->on('seguimiento');
                $table->foreign('materia_idmateria')->references('idmateria')->on('materia');
            });
        Schema::create('periodo', function(Blueprint $table)
            {
                $table->increments('idperiodo');
            });
        Schema::create('aula', function(Blueprint $table)
            {
                $table->increments('idaula');
                $table->string('nombre_aula', 10);
            });
        Schema::create('hora', function(Blueprint $table)
            {
                $table->increments('idhora');
                $table->integer('periodo_idperiodo')->unsigned();
                $table->integer('aula_idaula')->unsigned();

                $table->dropPrimary('idhora');
                
                $table->primary('idhora');
                $table->foreign('periodo_idperiodo')->references('idperiodo')->on('periodo');
                $table->foreign('aula_idaula')->references('idaula')->on('aula');
            });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        //eliminamos todas las tablas
        Schema::drop('facultad');
        Schema::drop('departamento');
        Schema::drop('carrera');
        Schema::drop('materia');
        Schema::drop('docente');
        Schema::drop('nombramiento');
        Schema::drop('materia_grupo');
    }
}
