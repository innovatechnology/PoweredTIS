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
                 $table->integer('sigla');
                $table->integer('departamento_iddepartamento')->unsigned();

                $table->dropPrimary('idmateria');

                $table->primary('idmateria');
                $table->foreign('departamento_iddepartamento')->references('iddepartamento')->on('departamento');
            });
        //TABLA materia_grupo
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
                $table->integer('iddocente')->unsigned();
                $table->integer('idmateria_grupo')->unsigned();

                $table->dropPrimary('idnombramiento');

                $table->primary('idnombramiento');
                $table->foreign('idmateria_grupo')->references('idmateria_grupo')->on('materia_grupo');
            });

        //docente
        Schema::create('docente', function(Blueprint $table)
            {
                $table->increments('iddocente');
                $table->string('nombre', 90);
                $table->string('Titulo', 300);
                $table->string('Diploma Academico', 200);

                $table->dropPrimary('iddocente');

                $table->primary('iddocente');
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
