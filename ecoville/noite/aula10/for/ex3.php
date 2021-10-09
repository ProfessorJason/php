<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>Aula 10 - For - Exemplo 03</title>
	<link rel="stylesheet" type="text/css" href="../css/estilo.css">
</head>
<body>

	<h1>Aula 10 - For - Exemplo 03</h1>

	<?php include_once 'menu.php'; ?>

	<h4>
		Somar todos os valores pares entre 34 e 87. Ao final, mostrar a soma, a quantidade de valores pares encontrados e a média destes valores.
	</h4>

	<h3>Resultado:</h3>

	<?php 

	$soma = 0;
	$qtde = 0;

	for ($cont = 34; $cont <= 87; $cont++)
	{
		// verificar se valor atual de $cont é par
		if ($cont % 2 == 0)
		{
			$qtde++; // incremento a quantidade de valore sapres encontrados
			// somo o valor de $soma com o valor atual de $cont:
			$soma += $cont; // mesma coisa que: $soma = $soma + $cont;
		}

	}

	// calculo da média
	$media = $soma / $qtde;

	echo "Soma dos valores pares: $soma<br>";
	echo "Quantidade de valores pares: $qtde<br>";
	echo "Média dos valores pares: $media";

	?>


</body>
</html>