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
		Calcular e apresentar o volume de uma lata de óleo cilíndrica, a partir da leitura do raio da base e da altura. A fórmula:<br> 
		pi * raio² * altura.
	</h3>

	<?php  

	// definindo uma constante no PHP
	define("PI", 3.14);

	$raio = 1.5;
	$altura = 4;

	$volume = PI * ($raio * $raio) * $altura;

	echo "<h4>O volume da lata de óleo de raio $raio e altura $altura = 
	$volume</h4>";

	?>

</body>
</html>