<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>Aula 12 - Exercício 04</title>
	<link rel="stylesheet" type="text/css" href="css/estilo.css">
</head>
<body>

	<h1>Aula 12 - Exercício 04</h1>

	<?php include_once 'menu.php'; ?>

	<h3>
		Crie um algoritmo que execute um loop por 10 vezes. A cada execução deste loop, gere um valor aleatório entre 1 e 10. Após todas as execuções. Mostre a quantidade de valores pares gerados, e a quantidade de valores ímpares.
	</h3>

	<h4>Resultado</h4>

	<?php  

	$pares = 0;
	$impares = 0;

	for ($i = 1; $i <= 10; $i++) 
	{
		$x = rand(1, 10); // valor aleatório entre 1 e 10

		// verificar se o valor atual gerado é par ou ímpar
		if ($x % 2 == 0)
		{
			$pares++; // aumenta em +1 o contador de valores pares
		}
		else // senão for par (é obrigatoriamente ímpar)
		{
			$impares++;
		}

	}

	echo "Quantidade de valores pares gerados: $pares<br>";
	echo "Quantidade de valores ímpares gerados: $impares<br>";

	?>

</body>
</html>