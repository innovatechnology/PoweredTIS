<html>
<head>
	<script type = "text/javascript" src="{{URL::to('js/handsontable/dist/handsontable.full.js')}}"></script>
	<link href="{{URL::to('js/handsontable/dist/handsontable.full.css')}}" rel="stylesheet" type="text/css">
</head>
<body>
	<script src="//code.jquery.com/jquery-latest.js"></script>
	<script type = "text/javascript">
		var matriz = [
		[1, 2, 3],
		[4, 5, 6],
		[7, 8, 9]
		];
		$("#tabla").handsontable({
		data: matriz
		});
	</script>
	<div id = "tabla">
	</div>
</body>
</html>