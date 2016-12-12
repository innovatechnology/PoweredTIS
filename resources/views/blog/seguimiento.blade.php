@extends('blog.app')
@section('content')
<script src="//code.jquery.com/jquery-latest.js"></script>

    <div class="container" id = "general">
<script>
function registrarSeguimiento()
{
    var docente = $('#doc_name option:selected').text();
    if(docente != 'Seleccione un Docente')
    {
        $.ajax({
            url: '/seguimiento/registrar/' + docente,
            type: 'get',
            success: function(data)
            {
                $('#general').html(data);
            },
            error: function()
            {
                $('#general').html('ERROR INESPERADO');
            }
        });
    }else{}
}
</script>
        <div class="panel panel-info">
            <div class="panel-heading">Formulario de Seguimiento</div>
                <div class="panel-body">
                    <form class="form-horizontal" role="form" method="POST" action="{{ url('/exito') }}">
                    {{ csrf_field() }}
                        <div class="form-group{{ $errors->has('doc_name') ? ' has-error' : '' }}">
                            <label for="doc_name" class="col-md-4 control-label">Nombre del docente</label>
                            <div class="col-md-6">
                                <select class="form-control" id="doc_name">
                                    <option selected="selected" disabled="disabled">Seleccione un Docente</option>
                                    @foreach ($docentes as $docente)
                                        <option>{{ $docente -> nombre }}</option>
                                    @endforeach
                                </select>
                            </div>
                        </div>

                    </form>

                    <div class="panel-body">
                        <div class="form-group">
                            <div class="col-md-8 col-md-offset-4">
                                <button class="btn btn-primary" onclick = "registrarSeguimiento();return false;">
                                    Registrar Seguimiento
                                </button>
                            </div>
                        </div>
                    </div>
            </div>
        </div>
    </div>



@endsection