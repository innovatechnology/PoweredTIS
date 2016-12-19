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
                <div class="panel-heading">Materia Nueva</div>
                <div class="panel-body">
                  <form class="form-horizontal" role="form" method = "post" action = "/materia/guardar">
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
                            <label for="nombre" class="col-md-4 control-label">Descripcion</label>

                            <div class="col-md-6">
                                <input id="descripcion" type="text" class="form-control" name="descripcion" value="{{ old('descripcion') }}" required autofocus>

                                @if ($errors->has('descripcion'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('descripcion') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group{{ $errors->has('name') ? ' has-error' : '' }}">
                            <label for="nombre" class="col-md-4 control-label">Sigla</label>

                            <div class="col-md-6">
                                <input id="sigla" type="text" class="form-control" name="sigla" value="{{ old('sigla') }}" required autofocus>

                                @if ($errors->has('sigla'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('sigla') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group{{ $errors->has('name') ? ' has-error' : '' }}">
                            <label for="nombre" class="col-md-4 control-label">Departamento</label>

                            <div class="col-md-6">
                                <select class="form-control" id="departamento", name="departamento">
                                    <option selected="selected" disabled="disabled">Seleccione un Departamento</option>
                                    <?php
                                    for($i = 0; $i < count($departamentos); $i++)
                                    {
                                      $cadena = "<option>" . $departamentos[$i]['nombre'] . "</option>";
                                      echo($cadena);
                                    }
                                    ?>
                                </select>
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
