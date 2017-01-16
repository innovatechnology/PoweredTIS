@extends('blog.app')
@section('content')
	<div class="container">
		<div class="panel panel-info">
			<div class="panel-heading">Lista de Formularios de Nombramiento</div>
	            <div class="panel-body">
	            	<table width = "100%" border = "0">
	            		<tr>
	            			<th width = "20%"></th>
	            			<th width = "20%"></th>
	            			<th width = "20%"></th>
	            			<th width = "20%"></th>
	            			<th width = "20%"></th>
	            		</tr>
	            		@foreach ($nombramientos as $nombramiento)
	            		<tr>
	            			<th>{{$nombramiento->seguimiento->docente->nombre}}</th>
	            			<td>
	            				@if ($ver)
	            				<a href = "/nombramiento/ver/{{$nombramiento->seguimiento->docente->nombre}}"><button class="btn btn-primary">visualizar</button></a>
	            				@endif
	            			</td>
	            			<td>
	            				@if ($editar)
	            				<a href = "/nombramiento/editar/{{$nombramiento->seguimiento->docente->nombre}}"><button class="btn btn-primary">editar</button></a>
	            				@endif
	            			</td>
	            			<td>
	            				@if ($descargar)
	            				<a href = "/nombramiento/descargar/{{$nombramiento->seguimiento->docente->nombre}}"><button class="btn btn-primary">descargar</button></a>
	            				@endif
	            			</td>
	            			<td>
	            				@if ($eliminar)
	            				<a href = "/nombramiento/eliminar/{{$nombramiento->seguimiento->docente->nombre}}"><button class="btn btn-primary">eliminar</button></a>
	            				@endif
	            			</td>
	            		</tr>
	            		@endforeach
	            	</table>
	            	<br>
	            	@if ($crear)
	            	<a href = "/nombramiento/nuevo"><button class="btn btn-primary">Nuevo Formulario</button></a>
	            	@endif
	            </div>
	        </div>
	    </div>
	</div>
@endsection