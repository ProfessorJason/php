<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>Aula 10 - For - Ex 02</title>
	<link rel="stylesheet" type="text/css" href="../css/estilo.css">
</head>
<body>

	<h1>Aula 10 - Laço For - Exemplo 02</h1>

	<?php include_once '../menu.php'; ?>

	<p>Percorrer o intervalo de valores entre -10 e 70. Mostrar na tela a quantidade de valores ímpares.</p>

	<h3>Resultado:</h3>

	<?php  

	$impares = 0; // neste momento, não contamos nenhum valor ímpar ainda

	for ($cont = -10; $cont <= 70; $cont++)
	{
		// verificar se o valor atual do contador é ímpar:
		if ($cont % 2 != 0)
		{
			// aumentar a quantidade de valores ímpares encontrados em +1
			$impares++;
		}
	}

	echo "Quantidade de valores ímpares entre -10 e 70 = $impares";

	?>


</body>
</html>