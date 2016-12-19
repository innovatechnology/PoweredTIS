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
                  <form class="form-horizontal" role="form" method = "post" action = "/docente/guardar">
                        {{ csrf_field() }}

                        <div class="form-group{{ $errors->has('name') ? ' has-error' : '' }}">
                            <label for="nombre" class="col-md-4 control-label">Nombre</label>

                            <div class="col-md-6">
                                <input id="nombre" type="text" class="form-control" name="nombre" value="{{ old('nombre') }}" required autofocus>

                                @if ($errors->has('nombre'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('nombre') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group{{ $errors->has('name') ? ' has-error' : '' }}">
                            <label for="titulo" class="col-md-4 control-label">Titulo</label>

                            <div class="col-md-6">
                                <input id="titulo" type="text" class="form-control" name="titulo" required>

                                @if ($errors->has('titulo'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('titulo') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group{{ $errors->has('password') ? ' has-error' : '' }}">
                            <label for="name" class="col-md-4 control-label">Diploma Academico</label>

                            <div class="col-md-6">
                                <input id="diploma" type="text" class="form-control" name="diploma" required>

                                @if ($errors->has('diploma'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('diploma') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

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
@endsection
