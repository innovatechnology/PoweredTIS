<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class DatosExtra extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        //datos extra que no se registraban en los formularios
        Schema::create('extra', function(Blueprint $table)
            {
                $table->increments('idextra');
                $table->integer('item_iditem')->unsigned();
                $table->string('facultad');
                $table->string('departamento');
                $table->string('carrera');
                $table->boolean('interno');
                $table->boolean('invitado');
                $table->boolean('asistente');
                $table->boolean('adjunto');

                $table->dropPrimary('idextra');
                
                $table->primary(['idextra', 'item_iditem']);
                $table->foreign('item_iditem')->references('iditem')->on('item_seguimiento');
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
        Schema::drop('extra');
    }
}
