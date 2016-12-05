@extends('blog.app')
@section('content')
	<div class="container">
		<div class="panel panel-info">
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