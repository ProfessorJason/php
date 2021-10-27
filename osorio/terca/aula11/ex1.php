<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>Aula 11 - Exercício 01</title>
	<link rel="stylesheet" type="text/css" href="css/estilo.css">
</head>
<body>

	<h1>Aula 11 - Exercício 01</h1>

	<?php include_once 'menu.php'; ?>

	<h3>Resultado:</h3>

	<?php  

	$pares = 0;
	$soma_pares = 0;
	$impares = 0;
	$soma_impares = 0;

	for ($i = 1; $i <= 100; $i++)
	{
		if ($i % 2 == 0) // de valor de 'i' for par
		{
			$pares++; // $pares = $pares + 1;
			$soma_pares += $i; // $soma-pares = $soma_pares + $i;
		}
		else
		{
			$impares++;
			$soma_impares += $i;
		}
	}

	$media = $soma_impares / $impares;

	echo "Quantidade de valores pares: $pares<br>";
	echo "Soma dos valores pares: $soma_pares<br>";
	echo "Média dos valores ímpares: $impares";


	?>



</body>
</html>