<!DOCTYPE html>
<html>
<head>
	<title>Calculadora</title>
	<link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>
	<div class="container">
		<form action="calcular.php" method="post">
			<input type="text" name="n1">
			<select name="tipo">
				<option selected="selected">somar</option>
				<option>subtrair</option>
				<option>multiplicar</option>
				<option>dividir</option>
			</select>
			<input type="text" name="n2">
			<input id="botao" type="submit" value="Calcular">
		</form>
	</div>
</body>
</html>