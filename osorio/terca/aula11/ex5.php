<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>Aula 11 - Exercício 05</title>
	<link rel="stylesheet" type="text/css" href="css/estilo.css">
</head>
<body>

	<h1>Aula 11 - Exercício 05</h1>

	<?php include_once 'menu.php'; ?>

	<h3>Resultado:</h3>

	<?php  

	$pares = 0;
	$cont = 0;

	do {

		$n = rand (1,6);

		if ($n % 2 == 0)
		{
			$pares++;
		}

		$cont++;

	} while ($pares < 12);

	echo "Quantidade de execuções do laço: $cont";


	?>

</body>
</html>