<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>Aula 03 - Exercício 04</title>
	<link rel="stylesheet" type="text/css" href="css/estilo.css">
</head>
<body>

	<h1>Aula 03 - Exercício 04</h1>

	<?php include_once 'menu.php'; ?>

	<h3>
		Calcular o consumo por litro de um carro, sendo que será informada a quantidade de quilômetros percorrido e a quantidade de litros abastecido (basta dividir a quantidade de litros abastecida pela quilometragem percorrida).
	</h3>

	<?php  

	$km = 30;
	$litros = 30;

	$consumo = $litros / $km;

	echo "<h4>O consumo por litro deste carro é $consumo km/l</h4>";

	?>

</body>
</html>