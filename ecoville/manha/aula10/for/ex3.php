<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>Aula 10 - For - Ex 03</title>
	<link rel="stylesheet" type="text/css" href="../css/estilo.css">
</head>
<body>

	<h1>Aula 10 - For - Exemplo 03</h1>

	<?php include_once 'menu.php'; ?>

	<h4>
		Calcular e mostrar a média dos valores pares entre 1 e 127;
	</h4>

	<h3>Resultado:</h3>

	<?php 

	$pares = 0; // quantidade inicial de valores pares
	$soma = 0; // somar os valores pares encontrados

	for ($cont = 1; $cont <= 127; $cont++)
	{
		if ($cont % 2 == 0)
		{
			// se o valor atual de cont for par
			$pares++; // aumento em 1 unidade o valor da variavel pares

			// precisamos somar o valor par atual com o que já temos
			$soma += $cont; // mesma coisa que: $soma = $soma + $cont;
		}
	}

	// calulo da média:
	$media = $soma / $pares;

	echo "Quantidade de valores pares entre 1 e 127: $pares<br>";
	echo "Soma dos valores pares entre 1 e 127: $soma<br>";
	echo "Média dos valores pares entre 1 e 127: $media";

	?>

</body>
</html>