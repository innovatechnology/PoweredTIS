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
                <div class="panel-heading">Editar permisos del usuario</div>
                <div class="panel-body">
                	<form class="form-horizontal" role="form" method = "post" action = "/usuarios/guardar">
                        {{ csrf_field() }}
                        <input type = "hidden" name = "correo" value = "{{$login}}">
                        {{$login}}
                        <br>
                        <br>

                        <label for="nombre" class="col-md-4 control-label">Roles</label>

                        <?php
                        for($i = 0; $i < count($roles); $i++)
                        {
                        	$cadena = "
                        <div class=\"form-group\">
                            <div class=\"col-md-6 col-md-offset-4\">
                                <div class=\"checkbox\">
                                    <label>
                                        <input type=\"checkbox\" name=\"" . $roles[$i]['nombre_rol'] . "\" value=\"" . $roles[$i]['nombre_rol'] . "\"> " . $roles[$i]['nombre_rol'] . "
                                    </label>
                                </div>
                            </div>
                        </div>";
                        	echo $cadena;
                        }
                        ?>

                        <div class="form-group">
                            <div class="col-md-8 col-md-offset-4">
                                <button type="submit" class="btn btn-primary">
                                    Guardar
                                </button>
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