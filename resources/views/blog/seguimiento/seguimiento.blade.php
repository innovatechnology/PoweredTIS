@extends('blog.app')
@section('content')
<script src="//code.jquery.com/jquery-latest.js"></script>

    <div class="container" id = "general">
<script>
function registrarMateria()
{
    $.ajax({
        url: '/seguimiento/materia/registrar',
        type: 'get',
        success: function(data)
        {
            $('#general').html(data);
        },
        error: function()
        {
            $('#general').html('ERROR INESPERADO No 2');
        }
    });
}
function seleccionFacultad()
{
    var facultad = $('#facultad option:selected').text();
    $.ajax({
        url: '/universidad/departamentos/' + facultad,
        dataType: 'json',
        type: 'get',
        success: function(data)
        {
            $('#departamento').html('');
            $('#departamento').append('<option selected="selected" disabled="disabled" value = "Seleccione Departamento">Seleccione Departamento</option>');
            for(var i = 0; i < data.length; i++)
            {
                var opcion = data[i].nombre;
                $('#departamento').append('<option value = "' + opcion + '">' + opcion + '</option>');
            }
        },
        error: function()
        {
            $('#departamento').html('');
            $('#departamento').append('<option selected="selected" disabled="disabled" value = "Seleccione Facultad primero">Seleccione Facultad primero</option>');
        }
    });
}
function seleccionDepartamento()
{
    var departamento = $('#departamento option:selected').text();
    $.ajax({
        url: '/universidad/carreras/' + departamento,
        dataType: 'json',
        type: 'get',
        success: function(data)
        {
            $('#carrera').html('');
            $('#carrera').append('<option selected="selected" disabled="disabled" value = "Seleccione Carrera">Seleccione Carrera</option>');
            for(var i = 0; i < data.length; i++)
            {
                var opcion = data[i].nombre;
                $('#carrera').append('<option value = "' + opcion + '">' + opcion + '</option>');
            }
        },
        error: function()
        {
            $('#carrera').html('');
            $('#carrera').append('<option selected="selected" disabled="disabled" value = "Seleccione Departamento primero">Seleccione Departamento primero</option>');
        }
    });
    $.ajax({
        url: '/universidad/materias',
        dataType: 'json',
        type: 'get',
        success: function(data)
        {
            $('#materia').html('');
            $('#materia').append('<option selected="selected" disabled="disabled" value = "Seleccione Materia">Seleccione Materia</option>');
            for(var i = 0; i < data.length; i++)
            {
                var opcion = data[i].nombre;
                $('#materia').append('<option value = "' + opcion + '">' + opcion + '</option>');
            }
        },
        error: function()
        {
            $('#materia').html('');
            $('#materia').append('<option selected="selected" disabled="disabled" value = "Seleccione Departamento primero">Seleccione Departamento primero</option>');
        }
    });
}
</script>
            <div class="panel-heading">Formulario de Seguimiento</div>
                <div class="panel-body">
                    <form class="form-horizontal" role="form" method="POST" action="/seguimiento/horario/registrar">
                    {{ csrf_field() }}

                        <div class="form-group{{ $errors->has('facultad') ? ' has-error' : '' }}">
                            <label for="facultad" class="col-md-4 control-label">Facultad</label>

                            <div class="col-md-6">
                                <select class="form-control" id="facultad" onchange="seleccionFacultad();return false;">
                                    <option selected="selected" disabled="disabled">Seleccione Facultad</option>
                                    @foreach ($facultades as $facultad)
                                        <option value = "{{ $facultad -> nombre }}">{{ $facultad -> nombre }}</option>
                                    @endforeach
                                </select>
                            </div>
                        </div>

                        <div class="form-group{{ $errors->has('departamento') ? ' has-error' : '' }}">
                            <label for="departamento" class="col-md-4 control-label">Departamento</label>

                            <div class="col-md-6">
                                <select class="form-control" id="departamento" onchange="seleccionDepartamento()">
                                    <option selected="selected" disabled="disabled" value = "Seleccione Facultad primero">Seleccione Facultad primero </option>
                                    
                                </select>
                            </div>
                        </div>
                        <div class="form-group{{ $errors->has('carrera') ? ' has-error' : '' }}">
                            <label for="carrera" class="col-md-4 control-label">Carrera</label>

                            <div class="col-md-6">
                                <select class="form-control" id="carrera">
                                    <option selected="selected" disabled="disabled">Seleccione Departamento Primero</option>

                                </select>
                            </div>
                        </div>
                        <div class="form-group{{ $errors->has('carrera') ? ' has-error' : '' }}">
                            <label for="carrera" class="col-md-4 control-label">Materia</label>

                            <div class="col-md-6">
                                <select class="form-control" id="materia" name = "materia">
                                    <option selected="selected" disabled="disabled">Seleccione Departamento primero</option>

                                </select>
                            </div>
                        </div>


                        
                       
                        <div class="form-group{}">
                            <label for="grupo" class="col-md-4 control-label">Seleccione grupo</label>

                            <div class="col-md-2">
                                <select class="form-control" id="grupo">
                                    <option selected="selected" disabled="disabled"># Grupo</option>

                                    <option>1</option>
                                    <option>2</option>
                                    <option>3</option>
                                    <option>4</option>
                                    <option>5</option>
                                    <option>6</option>
                                </select>
                            </div>
                        </div>
                        
                        <div class ="form-group{}">
                            <lavel for= "grupo" class="col-md-0 control-lavel">categoria Docente</lavel>
                            <br />
                        <input name="" type="checkbox" />A(Cat)
                            <br />
                        <input name="" type="checkbox" checked="checked" />B(Adj)
                            <br />
                                <input name="" type="checkbox" />C(Asist)
                            <br />
                                <input name="" type="checkbox" />Auxiliar de Docencia    
                        </div>

                        <div class="form-group">
                            <div class="col-md-8 col-md-offset-4">
                                <button class="btn btn-primary">
                                    Siguiente
                                </button>
                            </div>
                        </div>
                    </form>    
                    
                </div>
            </div>

</div>

@endsection