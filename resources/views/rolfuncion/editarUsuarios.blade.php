@extends('blog.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">Editar informacion de usuario</div>
                <div class="panel-body">
                	<form class="form-horizontal" role="form" method = "post" action = "/usuarios/guardar">
                        {{ csrf_field() }}
                        <input type = "hidden" name = "correo" value = "{{$login}}">
                        {{$login}}

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

                        <div class="form-group{{ $errors->has('password') ? ' has-error' : '' }}">
                            <label for="password" class="col-md-4 control-label">Password Actual</label>

                            <div class="col-md-6">
                                <input id="password_viejo" type="password" class="form-control" name="password_viejo" required>

                                @if ($errors->has('password_viejo'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('password_viejo') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group{{ $errors->has('password') ? ' has-error' : '' }}">
                            <label for="password" class="col-md-4 control-label">Password Nuevo</label>

                            <div class="col-md-6">
                                <input id="password" type="password" class="form-control" name="password" required>

                                @if ($errors->has('password'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('password') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group{{ $errors->has('password_confirmation') ? ' has-error' : '' }}">
                            <label for="password-confirm" class="col-md-4 control-label">Confirmar Password</label>

                            <div class="col-md-6">
                                <input id="password-confirm" type="password" class="form-control" name="password_confirmation" required>

                                @if ($errors->has('password_confirmation'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('password_confirmation') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group">
                            <div class="col-md-6 col-md-offset-4">
                                <div class="checkbox">
                                    <label>
                                        <input type="checkbox" name="remember"> Recordarme
                                    </label>
                                </div>
                            </div>
                        </div>

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
    </div>
</div>
@endsection
