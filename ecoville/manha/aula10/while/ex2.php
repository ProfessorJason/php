<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>Aula 10 - While - Ex 02</title>
	<link rel="stylesheet" type="text/css" href="../css/estilo.css">
</head>
<body>

	<h1>Aula 10 - While - Exemplo 02</h1>

	<?php include_once 'menu.php'; ?>

	<h4>
		Fernando atualmente mede 1,45m de altura, e seu amigo Luiz, mede 1,30m. Fernando cresce 3 cm por ano, enquanto Luiz cresce 5cm por ano. <br>
		Quantos anos levará para que Luiz se torne mais alto que Fernando?
	</h4>

	<h3>Resultado:</h3>


	<?php 

	// valores iniciais das variaveis
	$fernando = 1.45;
	$luiz = 1.30;

	$anos = 0; // tempo decorrido (inicialmente é zero)

	// Enquanot Fernando for maior ou igual ao Luiz
	while ($fernando >= $luiz)
	{
		$fernando += 0.03; // Fernando cresceu 3cm
		$luiz += 0.05; // Luiz cresceu 5cm
		$anos++; // aumentamos 1 ano no tempo decorrido
	}

	echo "Altura atual do Fernando: $fernando m<br>";
	echo "Altura atual do Luiz: $luiz m<br>";
	echo "Luiz se tornou mais alto que Fernando após $anos anos";

	?>

</body>
</html>