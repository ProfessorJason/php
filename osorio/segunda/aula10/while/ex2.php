<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>Aula 10 - While - Ex 02</title>
	<link rel="stylesheet" type="text/css" href="../css/estilo.css">
</head>
<body>

	<h1>Laço While - Exemplo 02</h1>

	<?php include_once '../menu.php'; ?>

	<p>
		Pedro atualmente tem 1,45m de altura. Seu colega Lucas, tem 1,30. Sabendo que Pedro cresce 3cm por ano, e Lucas, cresce 5cm, quantos anos serão necessários para que Lucas se torne mais alto que pedro?
	</p>

	<h3>Resultado</h3>

	<?php 

	// altura atual dos amigos
	$pedro = 1.45;
	$lucas = 1.30;
	$anos =0; // tempo decorrido, inicialmente é zero

	while ($pedro >= $lucas)
	{
		$pedro += 0.03; // cresce 3 cm
		$lucas += 0.05; // cresce 5 cm
		$anos++; // aumenta 1 ano na contagem
	}

	echo "Altura final de Pedro: $pedro m<br>";
	echo "Altura final de Lucas: $lucas m<br>";
	echo "Tempo decorrido: $anos anos";

	?>

</body>
</html>