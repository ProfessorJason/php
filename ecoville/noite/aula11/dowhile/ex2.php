<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>Aula 11 - Do/While - Ex 02</title>
	<link rel="stylesheet" type="text/css" href="../css/estilo.css">
</head>
<body>

	<h1>Aula 11 - Do/While - Exemplo 02</h1>

	<?php include_once '../menu.php'; ?>

	<p>
		Mostre o valor de 'x' na tela até que 'x' valha 5. Faça a variável iniciar de 1.
	</p>

	<h3>Resultado:</h3>

	<?php  

	$x = 1;

	do {

		echo "Valor atual de X: $x<br>";
		$x++;

	} while ($x <= 5);

	?>

	<p>
		Mostre o valor de 'x' na tela até que 'x' valha 5. Mas agora, faça a variável iniciar de 6.
	</p>

	<h3>Resultado:</h3>

	<?php  

	$x = 6;

	do {

		echo "Valor atual de X: $x<br>";
		$x++; // aqui, a variavel $x vale 7

	} while ($x <= 5);

	?>

</body>
</html>