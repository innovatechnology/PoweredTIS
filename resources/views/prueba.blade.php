<html>

<head>

<title>Handdsontable free</title>
<script src="//code.jquery.com/jquery-latest.js"></script>
<link rel="stylesheet" type="text/css" href="handsontable-master/dist/handsontable.full.min.css">
<script src = "handsontable-master/dist/handsontable.full.min.js"></script>
</head>

<body>
    <header>
            <div>
            <img src="logoa2.png"  />
                <!--h1> cabeza </h1-->
            
            </div>
    
    </header>
    <div id = "tabla">
        Hola
    </div>
    <script>
var datitos = [
['', '', '', '', '', ''],
['', '', '', '', '', ''],
['', '', '', '', '', ''],
['', '', '', '', '', ''],
['', '', '', '', '', ''],
['', '', '', '', '', ''],
['', '', '', '', '', ''],
['', '', '', '', '', ''],
['', '', '', '', '', ''],
['', '', '', '', '', '']
];
var lugar = $('#tabla');
lugar.handsontable({
    data: datitos,
    rowHeaders: ['6:45', '8:15', '9:45', '11:15', '12:45', '14:15', '15:45', '17:15', '18:45', '20:15'],
    colHeaders: ['Lunes', 'Martes', 'Miercoles', 'Jueves', 'Viernes', 'Sabado']
});
</script>
</body>
</html>