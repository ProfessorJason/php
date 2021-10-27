<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>Aula 11 - Exercício 04</title>
	<link rel="stylesheet" type="text/css" href="css/estilo.css">
</head>
<body>

	<h1>Aula 11 - Exercício 04</h1>

	<?php include_once 'menu.php'; ?>

	<h3>Resultado:</h3>

	<?php  

	$pares = 0;
	$impares = 0;

	for ($i = 1; $i <= 10; $i++) 
	{
		$n = rand(1, 10);

		if ($n % 2 == 0)
		{
			$pares++;
		} 
		else 
		{
			$impares++;
		}
	}

	echo "Valores pares gerados: $pares<br>";
	echo "Valores ímpares gerados: $impares<br>";


	?>

</body>
</html>