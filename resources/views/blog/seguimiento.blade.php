@extends('blog.app')
@section('content')
    <div class="container">
        <div class="panel panel-default">
            <div class="panel-heading">Formulario de Seguimiento</div>
                <div class="panel-body">
                    <form class="form-horizontal" role="form" method="POST" action="{{ url('/exito') }}">
                    {{ csrf_field() }}
                        <div class="form-group{{ $errors->has('doc_name') ? ' has-error' : '' }}">
                            <label for="doc_name" class="col-md-4 control-label">Nombre del docente</label>
                            <div class="col-md-6">
                                <select class="form-control" id="doc_name">
                                    <option selected="selected" disabled="disabled">Seleccione un Docente</option>
                                    @foreach ($docentes as $docente)
                                        <option>{{ $docente -> nombre }}</option>
                                    @endforeach
                                </select>
                            </div>
                        </div>

                        <div class="form-group{{ $errors->has('facultad') ? ' has-error' : '' }}">
                            <label for="facultad" class="col-md-4 control-label">Facultad</label>

                            <div class="col-md-6">
                                <select class="form-control" id="facultad">
                                    <option selected="selected" disabled="disabled">Seleccione Facultad</option>
                                    @foreach ($facultades as $facultad)
                                        <option>{{ $facultad -> nombre }}</option>
                                    @endforeach
                                </select>
                            </div>
                        </div>

                        <div class="form-group{{ $errors->has('departamento') ? ' has-error' : '' }}">
                            <label for="departamento" class="col-md-4 control-label">Departamento</label>

                            <div class="col-md-6">
                                <select class="form-control" id="departamento">
                                    <option selected="selected" disabled="disabled">Seleccione Facultad primero </option>
                                    
                                    @foreach ($departamentos as $departamento)
                                        <option>{{ $departamento -> nombre }}</option>
                                    @endforeach
                                </select>
                            </div>
                        </div>
                        <div class="form-group{{ $errors->has('carrera') ? ' has-error' : '' }}">
                            <label for="carrera" class="col-md-4 control-label">Carrera</label>

                            <div class="col-md-6">
                                <select class="form-control" id="carrera">
                                    <option selected="selected" disabled="disabled">Seleccione Carrera</option>
                                        @foreach ($carreras as $carrera)
                                            <option>{{ $carrera -> nombre }}</option>
                                        @endforeach
                                </select>
                            </div>
                        </div>
                        <div class="form-group{{ $errors->has('carrera') ? ' has-error' : '' }}">
                            <label for="carrera" class="col-md-4 control-label">Materia</label>

                            <div class="col-md-6">
                                <select class="form-control" id="carrera">
                                    <option selected="selected" disabled="disabled">Seleccione Materia</option>
                                        @foreach ($materias as $materia)
                                            <option>{{ $materia -> nombre }}</option>
                                        @endforeach
                                </select>
                            </div>
                        </div>


                        
                       
                        <div class="form-group{}">
                            <label for="grupo" class="col-md-4 control-label">Seleccione grupo</label>

                            <div class="col-md-2">
                                <select class="form-control" id="grupo">
                                    <option selected="selected" disabled="disabled"># Grupo</option>

                                    <option>1</option>
                                    <option>2</option>
                                    <option>3</option>
                                    <option>4</option>
                                    <option>5</option>
                                    <option>6</option>
                                </select>
                            </div>
                        </div>
                        
                        <div class ="form-group{}">
                            <lavel for= "grupo" class="col-md-0 control-lavel">categoria Docente</lavel>
                            <br />
                        <input name="" type="checkbox" />A(Cat)
                            <br />
                        <input name="" type="checkbox" checked="checked" />B(Adj)
                            <br />
                                <input name="" type="checkbox" />C(Asist)
                            <br />
                                <input name="" type="checkbox" />Auxiliar de Docencia    
                        </div>
                        
                    </form>
                </div>
//////////////////// materia detallada
                <div class="panel-heading">Materias Detallado</div>

                     <div class="panel-body">
                            <p>Horario</p>
                             <div class ="form-group{}">
                            <lavel for= "grupo" class="col-md-0 control-lavel"></lavel>
                                <div class="col-md-2">
                                <select class="form-control" id="dia">
                                <label for="nombre" class="col-md-4 control-label">Dia</label>
                                    <option selected="selected" disabled="disabled">dia</option>
                                    <option>Lunes</option>
                                    <option>Martes</option>
                                    <option>Miercoles</option>
                                    <option>Jueves</option>
                                    <option>Viernes</option>
                                    <option>Sabado</option>
                                </select>
                            </div>
                            </div>
                                <div class="col-md-4">
                                <select class="form-control" id="hora">
                                <label for="nombre" class="col-md-4 control-label">horaInicio</label>
                                    <option selected="selected" disabled="disabled">hora Inicio</option>
                                    <option>6:45</option>
                                    <option>8:15</option>
                                    <option>9:45</option>
                                    <option>11:15</option>
                                    <option>12:45</option>
                                    <option>14:15</option>
                                </select>
                            </div>
                            <div class="col-md-4">
                                <select class="form-control" id="dia">
                                <label for="nombre" class="col-md-0 control-label">hora Fin</label>
                                    <option selected="selected" disabled="disabled">hora Fin</option>
                                   
                                    <option>8:15</option>
                                    <option>9:45</option>
                                    <option>11:15</option>
                                    <option>12:45</option>
                                    <option>14:15</option>
                                </select>
                            </div>

                            <div class="form-group{}">
                           
                            

                            <div class="col-md-2">
                            <label for="Aula" class="col-md-6 control-label">Aula</label>
                                <input id="aula" type="text" class="form-control" name="Aula" value="{{ old('Aula') }}" required autofocus>
                                
                                        
                                            
                               
                            </div>
                        </div>

                           <div class="form-group{}">
                            <label for="diploma" class="col-md-1 control-label">Hrs. Semana</label>

                            <div class="col-md-1">
                                <input id="" type="text" class="form-control" name="" value="{{ old('') }}" required autofocus>

                                @if ($errors->has(''))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>
                        <div class="form-group{}">
                            <label for="diploma" class="col-md-1 control-label">Hrs.Teoria Mes</label>

                            <div class="col-md-1">
                                <input id="" type="text" class="form-control" name="" value="{{ old('') }}" required autofocus>

                                @if ($errors->has(''))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>
                       <div class="form-group{}">
                            <label for="diploma" class="col-md-1 control-label">Hrs.Practica Mes</label>

                            <div class="col-md-1">
                                <input id="" type="text" class="form-control" name="" value="{{ old('') }}" required autofocus>

                                @if ($errors->has(''))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                         <div class="form-group{}">
                            <label for="diploma" class="col-md-1 control-label">Hrs.Mes de la Materia</label>

                            <div class="col-md-1">
                                <input id="" type="text" class="form-control" name="" value="{{ old('') }}" required autofocus>

                                @if ($errors->has(''))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                         <div class="form-group">
                            <div class="col-md-8 col-md-offset-4">
                                <button type="submit" class="btn btn-primary">
                                    Registrar Materia
                                </button>
                            </div>
                        </div>
                       </div>
                    <div class="panel-heading"></div>

                     <div class="panel-body">
                            <div class="form-group">
                            <div class="col-md-8 col-md-offset-4">
                                <button type="submit" class="btn btn-primary">
                                    Registrar Seguimiento
                                </button>
                            </div>
                        </div>
                    </div>
            </div>
        </div>

@endsection