<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>Aula 10 - While - Ex 03</title>
	<link rel="stylesheet" type="text/css" href="../css/estilo.css">
</head>
<body>

	<h1>Laço While - Exemplo 03</h1>

	<?php include_once 'menu.php'; ?>

	<h3>
		Percorrer um intervalo finito de valores, iniciando em -10, aumentando de 1 em 1, até 'x'. Não sabemos qual será o valor de 'x' (último valor da sequência). Sabemos apenas que o critério para pararmos de percorrer o intervalo de valores é encontrarmos 47 valores ímpares. Mostrar qual o valor final da sequência.
	</h3>

	<?php  

	$x = -10; // valor inicial da sequencia
	$impares = 0; // quantidade inicial de valores ímpares

	while ($impares <= 47)
	{
		// verificar se o valor atual da sequencia é impar
		if ($x % 2 != 0)
		{
			$impares++;// aumentamos em 1 a quantidade de ímpares encontrados na sequência
		}

		$x++; // aumentar o valor de $x em 1 a cada passagem do laço
	}

	echo "<h4>O valor final da sequência é $x</h4>";

	?>

</body>
</html>