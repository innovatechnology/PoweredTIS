@extends('blog.app')

@section('content')
<div class="container">
    <div class="row">
		<div class="col-md-2 col-md-offset-0">
            <div class="panel panel-default">
                 <div class="panel-heading">Menu</div>
                 <div class="panel-body">
                            <a href="http://localhost:8000/blog" >Pagina de inicio</a>
                          <p> </p> 
                          <a href="http://localhost:8000/nombramiento">-Nombramiento</a>
                          <p> </p> 
                          <a href="http://localhost:8000/seguimiento"> -Seguimiento</a>
                          <p> </p> 
                          <a href="http://localhost:8000/usuarios" >Usuarios</a>
                 
                  </div>
            </div>
        </div>

        <div class="col-md-8 col-md-offset-0">
            <div class="panel panel-default">
                <div class="panel-heading">Lista de usuarios</div>
                <div class="panel-body">
        <?php
		for($i = 0; $i < count($elementos); $i++)
		{
			if(strcmp($tipo, "roles") == 0)
			{
				$cadena = "<a href = \"roles/editar/" . $elementos[$i]['nombre_rol'] . "\">" . $elementos[$i]['nombre_rol'] . "</a>" . "<br>";
        $cadena = "<form class=\"form-horizontal\" role=\"form\" method=\"get\" action=\"/roles/editar/" . $elementos[$i]['nombre_rol'] . "\">
                        {{ csrf_field() }}
                        <div class=\"form-group\">
                            <div class=\"col-md-8 col-md-offset-4\">
                                <button type=\"submit\" class=\"btn btn-primary\">
                                    " . $elementos[$i]['nombre_rol'] . "
                                </button>
                            </div>
                        </div>
                    </form>";   
			}else{}
			if(strcmp($tipo, "funciones") == 0)
			{
				$cadena = "<a href = \"funciones/editar/" . $elementos[$i]['nombre_funcion'] . "\">" . $elementos[$i]['nombre_funcion'] . "</a>" . "<br>";
			}
			echo $cadena;
		}
		?>
		<form method = "get" action = "/{{$tipo}}/crear">
			<input type = "submit" value = "Crear Nuevo">
		</form>
                </div>
            </div>
        </div>

        <div class="col-md-2 col-md-offset-0">
            <div class="panel panel-default">
                 <div class="panel-heading">Paginas Amigas</div>
                 <div class="panel-body">
                            <a href="http://www.cs.umss.edu.bo/" >cs.umss</a>
                          <p> </p> 
                          <a href="http://fcyt.umss.edu.bo/" >Fcyt</a>
                          <p> </p> 
                          <a href="http://websis.umss.edu.bo/"> Websis</a>
                          <p> </p> 
                          <a href="http://enlinea.umss.edu.bo/" >Moodle</a>
                 
                  </div>
 	  		</div>
		</div>
	</div>
</div>
@endsection