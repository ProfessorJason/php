<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>Aula 12 - Exercício 05</title>
	<link rel="stylesheet" type="text/css" href="css/estilo.css">
</head>
<body>

	<h1>Aula 12 - Exercício 05</h1>

	<?php include_once 'menu.php'; ?>

	<h3>
		Crie um programa utilizando uma estrutura de repetição que execute x vezes, onde a quantidade de execuções está relacionada ao fato de serem encontrados 12 valores pares gerados aleatoriamente dentro do intervalo entre 1 e 6. Mostrar ao final a quantidade total de execuções.
	</h3>

	<h4>Resultado</h4>

	<?php  

	$pares = 0; // contador de valores pares
	$cont = 0; // contador de execuções

	while ($pares < 12)
	{
		$x = rand(1,6); // valor aleatório entre 1 e 6

		// verificar se o valor gerado é par:
		if ($x % 2 == 0)
		{
			$pares++;
		}

		// aumentar em +1 a quantidade de execuções deste laço
		$cont++;
	}

	echo "Quantidade total de execuções do laço: $cont";

	?>


</body>
</html>