<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>Aula 03 - Exercício 06</title>
	<link rel="stylesheet" type="text/css" href="css/estilo.css">
</head>
<body>

	<h1>Aula 03 - Exercício 06</h1>

	<?php include_once 'menu.php'; ?>

	<h3>
		Ler uma temperatura em graus Celsius e apresentá-la convertida em graus Fahrenheit. A fórmula de conversão: <br>F ← (9*C+160)/5
	</h3>

	<?php  

	$c = 22;

	$f = (9 * $c + 160) / 5;

	echo "<h4>Temperatura em Celsius: $c °<br>
	Temperatira em Fahrenheit: $f °</h4>";
	?>

</body>
</html>