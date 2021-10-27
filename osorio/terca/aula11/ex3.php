<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>Aula 11 - Exercício 03</title>
	<link rel="stylesheet" type="text/css" href="css/estilo.css">
</head>
<body>

	<h1>Aula 11 - Exercício 03</h1>

	<?php include_once 'menu.php'; ?>

	<h3>Resultado:</h3>

	<?php  

	$joao = 2.5; // kg
	$jose = 2.7; // kg
	$semanas = 0;

	while ($joao <= 5 || $jose <= 5)
	{
		$joao += 0.215;
		$jose += 0.210;
		$semanas++;
	}

	echo "Tempo decorrido: $semanas semanas<br>";
	echo "Peso final de João: $joao Kg<br>";
	echo "Peso final de José: $jose Kg";


	?>



</body>
</html>