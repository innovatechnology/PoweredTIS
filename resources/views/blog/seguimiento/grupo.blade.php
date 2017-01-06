@extends('blog.app')
@section('content')
<div class="panel-heading">Materias Detallado</div>
            <form class="form-horizontal" role="form" method="POST" action="{{ url('/exito') }}">
                    {{ csrf_field() }}

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
                                <div class="col-md-2">
                                <select class="form-control" id="hora">
                                <label for="nombre" class="col-md-4 control-label">Periodo</label>
                                    <option selected="selected" disabled="disabled">periodo</option>
                                    <?php
                                        for($i = 0; $i < count($horas); $i++)
                                        {
                                            $cadena = "<option>" . $horas[$i]['horario'] . "</option>";
                                            echo($cadena);
                                        }
                                    ?>
                                </select>
                            </div>

                            <div class="form-group{}">
                           
                            

                            <div class="col-md-2">
                                <select class="form-control" id="aula">
                                <label for="nombre" class="col-md-4 control-label">Aula</label>
                                    <option selected="selected" disabled="disabled">aula</option>
                                    <?php
                                        for($i = 0; $i < count($aulas); $i++)
                                        {
                                            $cadena = "<option>" . $aulas[$i]['nombre_aula'] . "</option>";
                                            echo($cadena);
                                        }
                                    ?>
                                </select>
                            </div>
                        </div>
                        <br><br><br><br>

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
                    </form>
            </div>
        </div>


@endsection