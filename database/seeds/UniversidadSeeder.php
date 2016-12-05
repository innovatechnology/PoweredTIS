<?php

use Illuminate\Database\Seeder;
use App\Facultad;
use App\Departamento;
use App\Carrera;
use App\Materia;
use App\Aula;
use App\Periodo;

class UniversidadSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //esto se encarga de inicializar la base de datos
        //inserta datos de prueba, no son los datos completos

        //1
        Facultad::create(
        	['nombre' => 'FCYT',
        	'descripcion' => 'facultad de ciencias y tecnologia'
        	]);
        //2
        Facultad::create([
        	'nombre' => 'FCE',
        	'descripcion' => 'facultad de ciencias economicas'
        	]);
        //3
        Facultad::create([
        	'nombre' => 'FACH',
        	'descripcion' => 'facultad de arquitectura y cienciaas del habitad'
        	]);
        //4
        Facultad::create(['nombre' => 'FHCE',
        	'descripcion' => 'facultad de humanidades y ciencias de la educacion'
        	]);

        //1
        Departamento::create([
        	'nombre' => 'sis-inf',
        	'descripcion' => 'departamento de sistemas e informatica',
        	'facultad_idfacultad' => 1
        	]);
        //2
        Departamento::create([
        	'nombre' => 'mat',
        	'descripcion' => 'departamento de matematicas',
        	'facultad_idfacultad' => 1
        	]);
        //3
        Departamento::create([
        	'nombre' => 'fis',
        	'descripcion' => 'departamento de fisica',
        	'facultad_idfacultad' => 1
        	]);
        //4
        Departamento::create([
        	'nombre' => 'eco',
        	'descripcion' => 'departamento de economia',
        	'facultad_idfacultad' => 2
        	]);
        //5
        Departamento::create([
        	'nombre' => 'arq',
        	'descripcion' => 'departamento de arquitectura',
        	'facultad_idfacultad' => 3
        	]);
        //6
        Departamento::create([
        	'nombre' => 'hab',
        	'descripcion' => 'departamento de ciencias del habitad',
        	'facultad_idfacultad' => 3
        	]);
        //7
        Departamento::create([
        	'nombre' => 'hum',
        	'descripcion' => 'departamento de humanidades',
        	'facultad_idfacultad' => 4
        	]);

        Materia::create([
        	'nombre' => 'intro',
        	'descripcion' => 'introduccion a la programacion primer semesrte',
        	'sigla' => 'intro000',
        	'departamento_iddepartamento' => 1
        	]);
        Materia::create([
        	'nombre' => 'teoria grafos',
        	'descripcion' => 'teoria de grafos, operaciones con grafos, algoritmos en grafos etc',
        	'sigla' => 'gr12343',
        	'departamento_iddepartamento' => 1
        	]);
        Materia::create([
        	'nombre' => 'calculo 1',
        	'descripcion' => 'calculo 1, numeros reales, funciones, derivadas e integrales',
        	'sigla' => 'calc001',
        	'departamento_iddepartamento' => 2
        	]);
        Materia::create([
        	'nombre' => 'calculo 2',
        	'descripcion' => 'calculo 2, la venganza de las funciones',
        	'sigla' => 'calc002',
        	'departamento_iddepartamento' => 2
        	]);
        Materia::create([
        	'nombre' => 'fisica 1',
        	'descripcion' => 'fisica 1, mecanica clasica en general',
        	'sigla' => 'fis100',
        	'departamento_iddepartamento' => 3
        	]);
        Materia::create([
        	'nombre' => 'fisica 3',
        	'descripcion' => 'fisica 3, electricidad y electromagnetismo',
        	'sigla' => 'fis200',
        	'departamento_iddepartamento' => 3
        	]);
        Materia::create([
        	'nombre' => 'contabilidad',
        	'descripcion' => 'contabilidad basica, cosas de balances etc',
        	'sigla' => 'conb1235',
        	'departamento_iddepartamento' => 4
        	]);
        Materia::create([
        	'nombre' => 'maquetas 1',
        	'descripcion' => 'hacer maquetas, no tengo la menor idea de si existe esa materia',
        	'sigla' => 'maq95782',
        	'departamento_iddepartamento' => 5
        	]);
        Materia::create([
        	'nombre' => 'arboles tropicales',
        	'descripcion' => 'arboles tropicales, tampoco tengo idea de que sea',
        	'sigla' => 'ar4521',
        	'departamento_iddepartamento' => 6
        	]);
        Materia::create([
        	'nombre' => 'redaccion',
        	'descripcion' => 'redaccion cientifica, escribir etc, esta materia si existe',
        	'sigla' => 'red1253',
        	'departamento_iddepartamento' => 7
        	]);

        Carrera::create([
        	'nombre' => 'Informatica',
        	'descripcion' => 'carrera de ingenieria informatica',
        	'departamento_iddepartamento' => 1
        	]);
        Carrera::create([
        	'nombre' => 'sistemas',
        	'descripcion' => 'carrera de ingenieria de sistemas',
        	'departamento_iddepartamento' => 1
        	]);
        Carrera::create([
        	'nombre' => 'matematicas',
        	'descripcion' => 'licenciatura en matematicas',
        	'departamento_iddepartamento' => 2
        	]);
        Carrera::create([
        	'nombre' => 'fisica',
        	'descripcion' => 'licenciatura en fisica',
        	'departamento_iddepartamento' => 3
        	]);
        Carrera::create([
        	'nombre' => 'civil',
        	'descripcion' => 'ingenieria civil',
        	'departamento_iddepartamento' => 3
        	]);
        Carrera::create([
        	'nombre' => 'economia',
        	'descripcion' => 'licenciatura en economia',
        	'departamento_iddepartamento' => 4
        	]);
        Carrera::create([
        	'nombre' => 'financiera',
        	'descripcion' => 'ingenieria financiera',
        	'departamento_iddepartamento' => 4
        	]);
        Carrera::create([
        	'nombre' => 'arquitectura',
        	'descripcion' => 'arquitectura y su descripcion',
        	'departamento_iddepartamento' => 5
        	]);
        Carrera::create([
        	'nombre' => 'tropical',
        	'descripcion' => 'ingenieria tropical',
        	'departamento_iddepartamento' => 6
        	]);
        Carrera::create([
        	'nombre' => 'turismo',
        	'descripcion' => 'licenciatura en turismo',
        	'departamento_iddepartamento' => 6
        	]);
        Carrera::create([
        	'nombre' => 'psicologia',
        	'descripcion' => 'para los que quieren ser psicologos',
        	'departamento_iddepartamento' => 7
        	]);
        Carrera::create([
        	'nombre' => 'linguistica',
        	'descripcion' => 'muchos idiomas',
        	'departamento_iddepartamento' => 7
        	]);

        Aula::create([
        	'nombre_aula' => '622'
        	]);

        Aula::create([
        	'nombre_aula' => '623'
        	]);

        Aula::create([
        	'nombre_aula' => '690B'
        	]);

        Aula::create([
        	'nombre_aula' => '690C'
        	]);

        Aula::create([
        	'nombre_aula' => '691A'
        	]);

        Aula::create([
        	'nombre_aula' => '692B'
        	]);

        Aula::create([
        	'nombre_aula' => '693C'
        	]);

        Aula::create([
        	'nombre_aula' => '617'
        	]);

        Aula::create([
        	'nombre_aula' => '612'
        	]);

        //1
        Periodo::create([
        	'horario' => '06:45-08:15'
        	]);
        //2
        Periodo::create([
        	'horario' => '08:15-09:45'
        	]);
        //3
        Periodo::create([
        	'horario' => '09:45-11:15'
        	]);
        //4
        Periodo::create([
        	'horario' => '11:15-12:45'
        	]);
        //5
        Periodo::create([
        	'horario' => '12:45-14:15'
        	]);
        //6
        Periodo::create([
        	'horario' => '14:15-15:45'
        	]);
        //7
        Periodo::create([
        	'horario' => '15:45-17:15'
        	]);
        //8
        Periodo::create([
        	'horario' => '17:15-18:45'
        	]);
        //9
        Periodo::create([
        	'horario' => '18:46-20:15'
        	]);
        //10
        Periodo::create([
        	'horario' => '20:15-21:45'
        	]);
    }
}
