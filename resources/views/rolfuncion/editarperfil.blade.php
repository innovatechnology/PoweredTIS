@extends('blog.app')
@section('content')
        
    
<div class="container">
    <div class="row">
          <div class="col-md-2 col-md-offset-0">
            <div class="panel panel-default">
                 <div class="panel-heading">Menu</div>
                 <div class="panel-body">
                            <a href="/blog" >Pagina de inicio</a>
                          <p> </p> 
                          <a href="/nombramiento">-Nombramiento</a>
                          <p> </p> 
                          <a href="/seguimiento"> -Seguimiento</a>
                          <p> </p> 
                          <a href="/usuarios" >Usuarios</a>
                 
                  </div>
            </div>
          </div>

        
        <div class="col-md-8 col-md-offset-0">
            <div class="panel panel-default">
            	<div class="panel-heading">Tu Perfil de Usuario</div>
                <div class="panel-body">
            	<form method = "post" action = "/usuarios/perfil/guardar">
                        {{ csrf_field() }}
                    <div class="form-group">
                        <label for="nombre" class="col-md-4 control-label">Nombre</label>
                        <div class="col-md-6">
                          <input id="nombre" type="text" class="form-control" name="nombre" value = {{$usuario->nombre}}>
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="nombre" class="col-md-4 control-label">Descripcion</label>
                        <div class="col-md-6">
                          <input id="descripcion" type="text" class="form-control" name="descripcion" value = {{$usuario->descripcion}}>
                        </div>
                    </div>
                    <div class="col-md-6">


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