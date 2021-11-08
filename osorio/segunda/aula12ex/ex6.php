<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>Aula 12 - Exercício 06</title>
	<link rel="stylesheet" type="text/css" href="css/estilo.css">
</head>
<body>

	<h1>Aula 12 - Exercício 06</h1>

	<?php include_once 'menu.php'; ?>

	<h3>
		Crie um programa que gere um número aleatório entre -10 e 10 até que encontre um número igual a zero. No final, mostre a soma dos números gerados.
	</h3>

	<h4>Resultado</h4>

	<?php  

	$soma = 0;

	do {

		$x = rand(-10, 10);
		echo "Valor atual de x: $x<br>";

		// somar o proprio valor de $soma com o valor gerado para $x
		$soma += $x;

	
	} while ($x != 0);

	echo "Soma dos valores gerados: $soma";

	?>


</body>
</html>