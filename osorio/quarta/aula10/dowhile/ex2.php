<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>Aula 10(b) - Do/While - Ex 02</title>
	<link rel="stylesheet" type="text/css" href="../css/estilo.css">
</head>
<body>

	<h1>Laço Do/While - Exemplo 02</h1>

	<?php include_once 'menu.php'; ?>

	<h3>
		Inicie a variável 'x' com 1, e a variável 'y' com 2. Faça a variável 'x' receber 'x' + 'y' e a variável 'y' receber +1. Repita esse processo enquanto 'x' for menor que 'y'.
	</h3>

	<h4>Resultado</h4>

	<?php  

	$x = 1;
	$y = 2;

	do {

		$x += $y; // mesma coisa que: $x = $x + $y
		$y++;

		echo "Valor atual de x: $x <br>";
		echo "Valor atual de y: $y <br><br>";
	
	} while ($x < $y);

	?>

</body>
</html>