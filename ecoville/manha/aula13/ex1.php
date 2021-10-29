<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>Aula 13 - Ex 01</title>
	<link rel="stylesheet" type="text/css" href="css/estilo.css">
</head>
<body>

	<h1>Aula 13 - Exercício - Ex 01</h1>

	<?php include_once 'menu.php'; ?>

	<h3>
		Faça um algoritmo que percorra um intervalo de valores entre 1 e 100. Calcule e mostre na tela: <br>
		<ol>
		<li>A quantidade de valores pares</li>
		<li>A soma dos valores pares</li>
		<li>A média dos valores ímpares</li>
		</ol>
	</h3>

	<h3>Resultado</h3>

	<?php  


	$pares = 0;
	$impares = 0;
	$soma_pares = 0;
	$soma_impares = 0;

	for ($cont = 1; $cont <= 100; $cont++) 
	{
		// verificar a cada passagem do laço se o contador é par
		if ($cont % 2 == 0)
		{
			$pares++;
			$soma_pares += $cont;
		}
		else
		{
			$impares++;
			$soma_impares += $cont;
		}
	}

	$media = $soma_impares / $impares;

	echo "Quantidade de valores pares: $pares<br>";
	echo "Soma dos valores pares: $soma_pares<br>";
	echo "Média dos valores ímpares: $media";

	?>
	
</body>
</html>	