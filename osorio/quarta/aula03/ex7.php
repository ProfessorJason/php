<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>Aula 03 - Exercício 07</title>
	<link rel="stylesheet" type="text/css" href="css/estilo.css">
</head>
<body>

	<h1>Aula 03 - Exercício 07</h1>

	<?php include_once 'menu.php'; ?>

	<h3>
		Calcular e apresentar o volume de uma lata de óleo cilíndrica, a partir da leitura do raio da base e da altura. A fórmula: pi * raio² * altura.
	</h3>

	<?php 

	$raio = 0.5;
	$altura = 2;

	// declarar uma constante em PHP
	define("PI", 3.14);

	$volume = PI * ($raio * $raio) * $altura;

	echo "<h4>O volume da lata cilindrica de raio $raio cm e altura $altura cm é de $volume</h4>";


	?>

</body>
</html>