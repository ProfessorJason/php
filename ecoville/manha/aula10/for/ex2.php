<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>Aula 10 - For - Ex 02</title>
	<link rel="stylesheet" type="text/css" href="../css/estilo.css">
</head>
<body>

	<h1>Aula 10 - For - Exemplo 02</h1>

	<?php include_once 'menu.php'; ?>

	<h4>
		Precisamos contar quantos valores ímpares existem no intervalo entre 1 e 345.
	</h4>

	<h3>Resultado:</h3>

	<?php 

	$impares = 0; // quantidade inicial de valores ímpares

	for($cont = 1; $cont <= 345; $cont++)
	{

		/* sobre o operador mod (%): retorna o resto da divisão
		$x = 3 / 2; $x vale 1.5
		$x = 3 % 2; $x vale 1
		*/

		if ($cont % 2 != 0) // se o contador for ímpar
		{
			// aumentar a quantidade de impares contatos (encontrados)
			$impares++; // aumentar uma unidade do valor da variavel
		}

	}

	echo $impares;

	?>

</body>
</html>