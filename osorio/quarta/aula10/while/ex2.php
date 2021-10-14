<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>Aula 10 - While - Ex 02</title>
	<link rel="stylesheet" type="text/css" href="../css/estilo.css">
</head>
<body>

	<h1>Laço While - Exemplo 02</h1>

	<?php include_once 'menu.php'; ?>

	<h3>
		Luiz atualmente tem 1.30m de altura. Seu amigo José, tem 1.45m de altura. Sabendo que Luiz cresce 5cm por ano, e José 3cm, daqui a quantos anos Luiz se tornará mais alto que José?
	</h3>

	<?php  

	// altura atual dos amigos
	$luiz = 1.30;
	$jose = 1.45;

	// tempo decorrido (em anos)
	$anos = 0; // não iniciamos a contagem ainda

	// enquanto o luiz for menor ou igual ao josé
	while ($luiz <= $jose)
	{
		// os amigos crecem
		$luiz += 0.05; // 5cm
		$jose += 0.03; // 3cm
		// passou um ano desde a ultima vez que se mediram:
		$anos++;
	}

	echo "<h4>Altura atual de Luiz: $luiz m<br>";
	echo "Altura atual de José: $jose m <br>";
	echo "Tempo decorrido: $anos anos</h4>";

	?>

</body>
</html>