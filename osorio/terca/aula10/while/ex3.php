<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>Aula 10 - While - Ex 03</title>
	<link rel="stylesheet" type="text/css" href="../css/estilo.css">
</head>
<body>

	<h1>Aula 10 - Laço While - Exemplo 03</h1>

	<?php include_once '../menu.php'; ?>

	<p>
		Percorrer todos os valores inteiros dentro de um intervalo finito entre -10 e 'x'. Mostrar o último valor desta sequência. Não sabemos inicialmente o último valor da sequência. Sabemos apenas que, a cada valor percorrido, devemos verificar se ele é ímpar. Se for, aumentamos a quantidade de impares encontrados em +1. Pararemos de percorrer este intervalo quando tivermos contado 47 valores ímpares.
	</p>

	<h3>Resultado</h3>

	<?php  

	$x = -10;

	$impares = 0;

	while ($impares < 47)
	{
		// verificar se o valor atual da sequência é impar
		if ($x % 2 != 0)
		{
			// aumentar em +1 a quantidade de ímpares contados
			$impares++;
		}

		// alterar o valor de $x para que ele avance em 1 no intervalo dos valores
		$x++;
	}

	echo "Último valor da sequencia: $x<br>";


	?>

</body>
</html>