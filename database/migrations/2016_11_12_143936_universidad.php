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

        //seguimiento
        Schema::create('seguimiento', function(Blueprint $table)
            {
                $table->increments('idseguimiento');
                $table->integer('docente_iddocente')->unsigned();

                $table->dropPrimary('idseguimiento');
                
                $table->primary('idseguimiento');
                $table->foreign('docente_iddocente')->references('iddocente')->on('docente');
            });
        //item de seguimiento es un grupo de la materia practicamente
        Schema::create('item_seguimiento', function(Blueprint $table)
            {
                $table->increments('iditem');
                $table->integer('seguimiento_idseguimiento')->unsigned();
                $table->integer('materia_idmateria')->unsigned();
                $table->integer('horas_teoricas');

                $table->dropPrimary('iditem');
                
                $table->primary('iditem');
                $table->foreign('seguimiento_idseguimiento')->references('idseguimiento')->on('seguimiento');
                $table->foreign('materia_idmateria')->references('idmateria')->on('materia');
            });

        //periodo ,aula y hora, son simplemente clasificadores
        Schema::create('periodo', function(Blueprint $table)
            {
                $table->increments('idperiodo');
                $table->string('horario', 20);
            });
        Schema::create('aula', function(Blueprint $table)
            {
                $table->increments('idaula');
                $table->string('nombre_aula', 10);
            });
        Schema::create('hora', function(Blueprint $table)
            {
                $table->increments('idhora');
                $table->integer('dia');
                $table->integer('item_iditem')->unsigned();
                $table->integer('periodo_idperiodo')->unsigned();
                $table->integer('aula_idaula')->unsigned();

                $table->dropPrimary('idhora');
                
                $table->primary('idhora');
                $table->foreign('periodo_idperiodo')->references('idperiodo')->on('periodo');
                $table->foreign('aula_idaula')->references('idaula')->on('aula');
                $table->foreign('item_iditem')->references('iditem')->on('item_seguimiento');
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
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        //eliminamos todas las tablas
        
        Schema::drop('hora');
        Schema::drop('aula');
        Schema::drop('periodo');
        Schema::drop('item_seguimiento');
        Schema::drop('materia_grupo');
        Schema::drop('materia');
        Schema::drop('carrera');
        Schema::drop('departamento');
        Schema::drop('facultad');
        Schema::drop('nombramiento');
        Schema::drop('seguimiento');
        Schema::drop('docente');
    }
}
