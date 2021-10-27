<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>Aula 11 - Exercício 06</title>
	<link rel="stylesheet" type="text/css" href="css/estilo.css">
</head>
<body>

	<h1>Aula 11 - Exercício 06</h1>

	<?php include_once 'menu.php'; ?>

	<h3>Resultado:</h3>

	<?php  

	$soma = 0;

	do {

		$n = rand(-10, 10);
		$soma += $n;

	} while ($n != 0);

	echo "A soma dos valores aleatórios gerados = $soma";


	?>

</body>
</html>