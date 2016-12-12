<html>

<head>

<title>Ejemplo sencillo de AJAX </title>
<script src="//code.jquery.com/jquery-latest.js"></script>

<script>
function realizaProceso(){

        $.ajax({
                url:   '/universidad/materias',
                data:'_token = <?php echo csrf_token() ?>',
                dataType: 'json',
                type:  'get',
                beforeSend: function () {
                        $("#resultado").html("Procesando, espere por favor...");
                },
                success:  function (data) {
                    var cadena = "";
                    for(var i = 0; i < data.length; i++)
                    {
                        cadena = cadena + ";" + data[i].nombre
                    }
                    $("#resultado").html(cadena);
                },
                error: function()
                {
                    $("#resultado").html("gg wp");
                }
        });
}
</script>

</head>

<body>

Realiza suma
<input type="button" href="javascript:;" onclick="realizaProceso();return false;" value="Calcula"/>
<br/>
Resultado: <span id="resultado">0</span>
</body>
</html>