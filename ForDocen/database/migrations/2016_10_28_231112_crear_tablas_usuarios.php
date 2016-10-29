<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CrearTablasUsuarios extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        //TABLA USUARIO
        Schema::create('usuario', function(Blueprint $table)
            {
                $table->increments('idusuario');
                $table->string('login', 20);
                $table->string('password', 20);
                $table->boolean('alta');
                $table->string('nombre', 40);

                $table->dropPrimary('idusuario');

                $table->primary('idusuario');
            });
        //TABLA SESION
        Schema::create('sesion', function(Blueprint $table)
            {
                $table->increments('idsesion');
                $table->integer('usuario_idusuario')->unsigned();
                $table->integer('pid');
                $table->timestamp('fecha');
                $table->boolean('activa');

                $table->dropPrimary('idsesion');

                $table->primary(['idsesion', 'usuario_idusuario']);
                $table->foreign('usuario_idusuario')->references('idusuario')->on('usuario');
            });
        //TABLA ROL
        Schema::create('rol', function(Blueprint $table)
            {
                $table->increments('idrol');
                $table->string('nombre_rol', 15);
                $table->string('descripcion_rol', 300);

                $table->dropPrimary('idrol');

                $table->primary('idrol');
            });
        //TABLA FUNCION
        Schema::create('funcion', function(Blueprint $table)
            {
                $table->increments('idfuncion');
                $table->string('nombre_funcion', 15);
                $table->string('descripcion_funcion', 300);

                $table->dropPrimary('idfuncion');

                $table->primary('idfuncion');
            });
        //TABLA USUARIO_ROL
        Schema::create('usuario_rol', function(Blueprint $table)
            {
                $table->integer('usuario_idusuario')->unsigned();
                $table->integer('rol_idrol')->unsigned();

                $table->primary(['usuario_idusuario', 'rol_idrol']);
                $table->foreign('usuario_idusuario')->references('idusuario')->on('usuario');
                $table->foreign('rol_idrol')->references('idrol')->on('rol');
            });
        //TABLA ROL_FUNCION
        Schema::create('rol_funcion', function(Blueprint $table)
            {
                $table->integer('rol_idrol')->unsigned();
                $table->integer('funcion_idfuncion')->unsigned();

                $table->primary(['rol_idrol', 'funcion_idfuncion']);
                $table->foreign('rol_idrol')->references('idrol')->on('rol');
                $table->foreign('funcion_idfuncion')->references('idfuncion')->on('funcion');
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
        Schema::drop('rol_funcion');
        Schema::drop('usuario_rol');
        Schema::drop('sesion');
        Schema::drop('usuario');
        Schema::drop('rol');
        Schema::drop('funcion');
    }
}
