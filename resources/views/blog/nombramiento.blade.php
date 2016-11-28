@extends('blog.app')
@section('content')
	<div class="container">
		<div class="panel panel-default">
			<div class="panel-heading">Formulario de Nombramiento</div>
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
	                    <div class="form-group{{ $errors->has('diploma') ? ' has-error' : '' }}">
                            <label for="diploma" class="col-md-4 control-label">Diploma Academico</label>

                            <div class="col-md-6">
                                <input id="diploma" type="text" class="form-control" name="diploma" value="{{ old('diploma') }}" required autofocus>

                                @if ($errors->has('diploma'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('diploma') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>
	                    <div class="form-group{{ $errors->has('titulo') ? ' has-error' : '' }}">
                            <label for="titulo" class="col-md-4 control-label">Titulo Provisional</label>

                            <div class="col-md-6">
                                <input id="titulo" type="text" class="form-control" name="titulo" value="{{ old('titulo') }}" required autofocus>

                                @if ($errors->has('titulo'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('titulo') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>
                        <div class="form-group{{ $errors->has('categoria') ? ' has-error' : '' }}">
	                        <label for="categoria" class="col-md-4 control-label">Categoria del Nombramiento</label>

	                        <div class="col-md-6">
	                            <select class="form-control" id="categoria">
	                            	<option selected="selected" disabled="disabled">Seleccione Tipo de Nombramiento</option>
								    <option>Interino</option>
								    <option>Invitado</option>
								    <option>Titular</option>
								</select>
	                        </div>
	                    </div>
	                    <div class="form-group{{ $errors->has('categoria') ? ' has-error' : '' }}">
	                        <label for="categoria" class="col-md-4 control-label">Tiempo de dedicacion</label>

	                        <div class="col-md-6">
	                            <select class="form-control" id="categoria">
	                            	<option selected="selected" disabled="disabled">Seleccione Tiempo</option>
								    <option>Tiempo Parcial</option>
								    <option>Tiempo Exclusivo</option>
								</select>
	                        </div>
	                    </div>
	                    <div class="form-group{{ $errors->has('fecha_nomb') ? ' has-error' : '' }}">
	                        <label for="fecha_nomb" class="col-md-4 control-label">Fecha de Nombramiento</label>
	                        <div class="col-md-6">
							 	<input type="date" class="form-control" name="fecha_nomb">
	                    	</div>
	                    </div>
	                    <div class="form-group{{ $errors->has('duracion_nomb') ? ' has-error' : '' }}">
	                        <label for="duracion_nomb" class="col-md-4 control-label">Tiempo de duracion del nombramiento</label>

	                        <div class="col-md-6">
	                            <select class="form-control" id="duracion_nomb">
	                            	<option disabled>Seleccione Tiempo</option>
								    <option>1 SEMESTRE</option>
								</select>
	                        </div>
	                    </div>
	                    <div class="form-group{{ $errors->has('fecha_sol') ? ' has-error' : '' }}">
	                        <label for="fecha_sol" class="col-md-4 control-label">Fecha de Solicitud</label>
	                       	<div class="col-md-6">
								<input type="date" class="form-control" name="fecha_sol">
	                    	</div>
	                    </div>
	                    <div class="form-group">
	                        <div class="col-md-8 col-md-offset-4">
	                            <button type="submit" class="btn btn-primary">
	                                Registrar Nombramiento de Docente
	                            </button>
	                        </div>
	                    </div>
	                </form>
	            </div>
	        </div>
	    </div>
	</div>
@endsection