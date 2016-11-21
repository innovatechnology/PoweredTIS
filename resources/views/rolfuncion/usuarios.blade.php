@extends('blog.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">Lista de usuarios</div>
                <div class="panel-body">
                	<?php
                	for($i = 0; $i < count($elementos); $i++)
                	{
                		$cadena = "
                	<form class=\"form-horizontal\" role=\"form\" method=\"get\" action=\"/usuarios/editar/" . $elementos[$i]['login'] . "\">
                        {{ csrf_field() }}
                        <div class=\"form-group\">
                            <div class=\"col-md-8 col-md-offset-4\">
                                <button type=\"submit\" class=\"btn btn-primary\">
                                    " . $elementos[$i]['login'] . "
                                </button>
                            </div>
                        </div>
                    </form>
                    <a class=\"btn btn-link\" href=\"/usuarios/eliminar/" . $elementos[$i]['login'] . "\">
                    Eliminar
                    </a>";
                    	echo $cadena;
                	}
                	?>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
