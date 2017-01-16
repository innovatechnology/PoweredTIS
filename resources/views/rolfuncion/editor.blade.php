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
            	<div class="panel-heading">Gestionar Roles</div>
                <div class="panel-body">
            	<form method = "post" action = "/{{$tipo}}/guardar">
                <input type = "hidden" name  = "identificador" value = {{$id}}>
                        {{ csrf_field() }}
                        <label for="nombre" class="col-md-4 control-label">Nombre</label>
                        <div class="col-md-6">
                          <input id="nombre" type="text" class="form-control" name="nombre" value = {{$nombre}}>
                        </div>
                        <label for="nombre" class="col-md-4 control-label">Descripcion</label>
                        <div class="col-md-6">
                          <input id="descripcion" type="text" class="form-control" name="descripcion" value = {{$descripcion}}>
                        </div>
                        <div class="col-md-6">
			<?php
			if(strcmp($tipo, "roles") == 0)
			{
				echo "Funciones: <br>";
				for($i = 0; $i < count($listaFunciones); $i++)
				{
					$cadena = "<input type = \"checkbox\" name = \"" . $listaFunciones[$i]['idfuncion'] . "\" value = \"" . $listaFunciones[$i]['idfuncion'] . "\">";
					echo $cadena;
					echo $listaFunciones[$i]['nombre_funcion'];
					echo "<br>";
				}
			}else{}
			?>
      <div class="form-group">
                            <div class="col-md-8 col-md-offset-4">
                                <button type="submit" class="btn btn-primary">
                                    Guardar
                                </button>
                            </div>
                        </div>
    </div>
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

</div>
@endsection