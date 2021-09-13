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
		Calcular o consumo por litro de um carro, sendo que será informada a quantidade de quilômetros percorrido e a quantidade de litros abastecido (basta dividir a quilometragem percorrida pela quantidade de litros abastecida).
	</h3>

	<?php  

	$km = 300;
	$litros = 30;

	$consumo = $km / $litros;

	echo "<h4>Você andou $km Km, tendo abastecido $litros L, e seu consumo médio é de 
	$consumo Km/l</h4>";


	?>

</body>
</html>