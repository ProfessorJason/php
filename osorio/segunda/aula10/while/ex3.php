<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>Aula 10 - While - Ex 03</title>
	<link rel="stylesheet" type="text/css" href="../css/estilo.css">
</head>
<body>

	<h1>Laço While - Exemplo 03</h1>

	<?php include_once '../menu.php'; ?>

	<p>
		Mostre todos os valores pertences ao intervalo entre -10 e 'x'. A cada número mostrado na tela, verifique se ele é ímpar. Se for, aumente a contagem de ímpares em +1. Pare de mostrar os valores do intervalo na tela quando o programa contar 47 valores ímpares.
	</p>

	<h3>Resultado:</h3>

	<?php  

	$impapres = 0;
	$x = -10;

	while ($impapres < 47)
	{
		echo "$x; ";

		// verificar de $x é impar
		if ($x %2 != 0)
		{
			$impapres ++; // aumenta em 1 o valor de $impares
		}

		$x++; // aumento e 1 o valor de $x

	}

	?>

</body>
</html>