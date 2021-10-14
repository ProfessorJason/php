<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>Aula 10 - For - Ex 03</title>
	<link rel="stylesheet" type="text/css" href="../css/estilo.css">
</head>
<body>

	<h1>Laço For - Exemplo 03</h1>

	<?php include_once 'menu.php'; ?>

	<h3>
		Somar todos os valores ímpares dentro do intervalo entre 0 e -99. Mostrar ao final o valor desta soma.
	</h3>

	<?php  

	$soma = 0;

	for ($cont = 0; $cont >= -99; $cont--)
	{
		if ($cont % 2 != 0)
		{
			$soma += $cont; // mesma coisa que: $soma = $soma + $cont;
		}
	}

	echo "<h4>Soma dos valores ímpares encontrados: $soma</h4>";

	?>

</body>
</html>