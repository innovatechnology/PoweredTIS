<?php
use App\Materia;
use App\ItemSeguimiento;
?>

<div class="panel-heading">Lista de Grupos</div>
<div class="panel-body">
    @foreach ($grupos as $grupo)
        <form method = "post" action = "/seguimiento/materia/modificar">
            {{ csrf_field() }}
            <input type = "hidden" name = "numseguimiento" value = {{$numseguimiento}}>
            <input type = "hidden" name = "numitem" value = {{$grupo->iditem}}>
            <input type = "submit" class = "btn btn-primary" value = "<?php echo($grupo->materia->nombre)?>"}}>
        </form>
        <br>
    @endforeach
    <form method = "post" action = "/seguimiento/materia/registrar">
        {{ csrf_field() }}
        <input type = "hidden" name = "numseguimiento" value = {{$numseguimiento}}>
        <input type = "submit" class = "btn btn-primary" value = "Nuevo Grupo">
    </form>
</div>