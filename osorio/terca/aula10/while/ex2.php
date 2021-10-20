<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>Aula 10 - While - Ex 02</title>
	<link rel="stylesheet" type="text/css" href="../css/estilo.css">
</head>
<body>

	<h1>Aula 10 - Laço While - Exemplo 02</h1>

	<?php include_once '../menu.php'; ?>

	<p>
		Julia tem 1,45m de altura. Alisson, tem 1,30m. Julia cresce 3cm por ano e o Alisson cresce 5cm por ano. Daqui a quantos anos Alisson se tornará mais alto que Julia?
	</p>

	<h3>Resultado:</h3>

	<?php  

	// altura inicial dos amigos
	$julia = 1.45;
	$alisson = 1.30;
	$anos = 0; // tempo decorrido neste momento, é zero

	while ($julia >= $alisson)
	{
		$julia += 0.03; // cresce 3 cm
		$alisson += 0.05; // cresce 5 cm
		$anos++; // aumentou 1 ano no tempo decorrido
	}

	echo "Altura final de Julia: $julia<br>";
	echo "Altura final de Alisson: $alisson<br>";
	echo "Tempo para Alisson ultrapassar Julia: $anos anos";


	?>


</body>
</html>