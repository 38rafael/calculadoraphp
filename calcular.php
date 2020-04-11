<?php 

	if (isset($_POST['n1'])) {
		$n1 = $_POST['n1'];
		$n2 = $_POST['n2'];
		$tipo = $_POST['tipo'];

		switch ($tipo) {
			case 'somar':
				$resultado = $n1+$n2;
				break;
			case 'subtrair':
				$resultado = $n1-$n2;
				break;
			case 'multiplicar':
				$resultado = $n1*$n2;
				break;
			case 'dividir':
				$resultado = $n1/$n2;
				break;			
		}
	}
	
?>

<!DOCTYPE html>
<html>
<head>
	<title>Calculadora</title>
	<link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>
	<div class="container">
		<div class="resultado">
			<div><?php echo $resultado; ?></div>
			<div><a href="novacalc.php"> Voltar </a></div>
			
		</div>
	</div>

</body>
</html>