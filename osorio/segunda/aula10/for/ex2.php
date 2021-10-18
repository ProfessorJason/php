<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>Aula 10 - For - Ex 02</title>
	<link rel="stylesheet" type="text/css" href="../css/estilo.css">
</head>
<body>

	<h1>Laço For - Exemplo 02</h1>

	<?php include_once '../menu.php'; ?>

	<p>
		Percorrer o intervalor de valores entre -11 e 47. Somar todos os valores ímpares desta sequência. Mostrar ao final o resultado da soma.
	</p>

	<h3>Resultado:</h3>

	<?php  

	$soma = 0;

	for ($cont = -11; $cont <= 47 ; $cont++) 
	{
		// se o valor atual do contador for impar
		if ($cont % 2 != 0)	
		{
			$soma += $cont; // mesma coisa: $soma = $soma + $cont;
		}
	}

	echo "Soma dos valores ímpares: $soma";

	?>


</body>
</html>