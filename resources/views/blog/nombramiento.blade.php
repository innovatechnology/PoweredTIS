@extends('blog.app')
@section('content')
	<div class="container">
		<div class="panel panel-info">
			<div class="panel-heading">Formulario de Nombramiento</div>
	            <div class="panel-body">
	                <form class="form-horizontal" role="form" method="post" action="/nombramiento/guardar">
	                {{ csrf_field() }}
	                    <div class="form-group{{ $errors->has('doc_name') ? ' has-error' : '' }}">
	                        <label for="doc_name" class="col-md-4 control-label">Nombre del docente</label>
	                        <div class="col-md-6">
	                            <select class="form-control" name = "docente" id="doc_name">
	                            	<option selected="selected" disabled="disabled">Seleccione un Docente</option>
								    @foreach ($docentes as $docente)
    									<option
    									@if ($docenteActual == $docente->nombre)
    									selected = "selected"
    									@endif
    									>{{ $docente -> nombre }}</option>
								    @endforeach
								</select>
	                        </div>
	                    </div>

	                    <div class="form-group{{ $errors->has('categoria') ? ' has-error' : '' }}">
	                        <label for="categoria" class="col-md-4 control-label">Tiempo de dedicacion</label>

	                        <div class="col-md-6">
	                            <select class="form-control" id="categoria" name = "categoria">
	                            	<option
	                            	@if ($nombramiento === null)
	                            	selected="selected"
	                            	@endif
	                            	disabled="disabled">Seleccione Tiempo</option>
								    <option
								    @if ($nombramiento!== null && $nombramiento->tiempo == 'Tiempo Parcial')
								    selected = "selected"
								    @endif
								    >Tiempo Parcial</option>
								    <option
								    @if ($nombramiento!== null && $nombramiento->tiempo == 'Tiempo Exclusivo')
								    selected = "selected"
								    @endif
								    >Tiempo Exclusivo</option>
								</select>
	                        </div>
	                    </div>
	                    <div class="form-group{{ $errors->has('fecha_nomb') ? ' has-error' : '' }}">
	                        <label for="fecha_nomb" class="col-md-4 control-label">Fecha de Nombramiento</label>
	                        <div class="col-md-6">
							 	<input type="date" class="form-control" name="fecha1"
							 	@if ($nombramiento !== null)
							 	value = {{$nombramiento->fecha_nombramiento}}
							 	@endif
							 	>
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
								<input type="date" class="form-control" name="fecha2"
								@if ($nombramiento !== null)
							 	value = {{$nombramiento->fecha_solicitud}}
							 	@endif
								>
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