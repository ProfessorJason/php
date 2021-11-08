<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>Aula 12 - Exercício 01</title>
	<link rel="stylesheet" type="text/css" href="css/estilo.css">
</head>
<body>

	<h1>Aula 12 - Exercício 01</h1>

	<?php include_once 'menu.php'; ?>

	<h3>
		Faça um algoritmo que percorra um intervalo de valores entre 1 e 100. Calcule e mostre na tela: <br>
		<ol>
			<li>A quantidade de valores pares </li>
			<li>A soma dos valores pares</li>
			<li>A média dos valores ímpares</li>
		</ol>
	</h3>

	<h4>Resultado:</h4>

	<?php 
	
	$pares = 0; // contador de valores pares (inicialmente é 0)
	$impares = 0; // contador de valores ímpares
	$soma_pares = 0;
	$soma_impares = 0;

	for ($cont = 1; $cont <= 100 ; $cont++) 
	{
		// verificar se o valor atual do contador é par
		$resto = $cont % 2;
		if ($resto == 0) // se resto for zero, valor é par
		{
			$pares++; // mesma coisa que: $pares = $pares + 1
			$soma_pares += $cont; 
			// mesma coisa que: $soma_pares = $soma_pares + $cont
		}
		else // senão for par (só pode ser ímpar):
		{
			$impares++;
			$soma_impares += $cont;
		}
	}

	// média dos valores ímpares
	$media = $soma_impares / $impares;

	echo "Quantidade de valores pares: $pares<br>";
	echo "Soma dos valores pares: $soma_pares<br>";
	echo "Média dos valores ímpares: $media";

	?>

</body>
</html>