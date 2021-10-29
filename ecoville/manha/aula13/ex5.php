<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>Aula 13 - Ex 05</title>
	<link rel="stylesheet" type="text/css" href="css/estilo.css">
</head>
<body>

	<h1>Aula 13 - Exercício - Ex 05</h1>

	<?php include_once 'menu.php'; ?>

	<h3>
		Crie um programa utilizando uma estrutura de repetição que execute x vezes, onde a quantidade de execuções está relacionada ao fato de serem encontrados 12 valores pares gerados aleatoriamente dentro do intervalo entre 1 e 6. Mostrar ao final a quantidade total de execuções.
	</h3>

	<h3>Resultado:</h3>

	<?php  

	$pares = 0;
	$cont = 0;

	while ($pares < 12)
	{
		$x = rand(1,6);

		if ($x % 2 == 0)
		{
			$pares++;
		}

		$cont++; // incremento do contador
	}

	echo "Quantidade de execuções do laço: $cont";


	?>

</body>
</html>	