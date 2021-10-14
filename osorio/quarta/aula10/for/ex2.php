<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>Aula 10 - For - Ex 02</title>
	<link rel="stylesheet" type="text/css" href="../css/estilo.css">
</head>
<body>

	<h1>Laço For - Exemplo 02</h1>

	<?php include_once 'menu.php'; ?>

	<h3>
		Contar quantos valores pares existem dentro do intervalo ebtre -10 e 57. Mostrar na tela apenas a quantidade de valores pares encontrados.
	</h3>


	<?php  

	
	$pares = 0; // quantidade de valores pares encontrados (inicialmente é zero, pois ainda não encontramos nenhum)

	for ($cont = -10; $cont <= 57; $cont++)
	{
		// verificar se o valor atual do contador é par
		$resto = $cont % 2; // armazenando o resto da divisão de $cont por 2
		if ($resto == 0) // resto zero = valor par
		{
			$pares++; // aumentado em 1 o valor atual de $pares
		}
	}

	echo "<h4>Quantidade de valores pares entre -10 e 57: $pares</h4>";

	?>

</body>
</html>