<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>Aula 11 - Foreach Ex 01</title>
	<link rel="stylesheet" type="text/css" href="css/estilo.css">
</head>
<body>

	<h1>Aula 11 - Foreach - Exemplo 01</h1>

	<?php include_once 'menu.php'; ?>

	<p>
		Crie um array para armazenar 5 carros dinstintos, seguindo o padrão: marca - modelo. ex: Ford - Fiesta. Utilize a declaração padrão de array para este exercício e a forma simplificada do foreach para mostrar os valores do array.
	</p>

	<h3>Resultado:</h3>

	<?php 

	$carros = array("Ford Fiesta", "Fiat Argo", "Mitsubishi Lancer", "Honda Civic", "Chevrolet Celta");

	// mostrando array com foreach:
	foreach ($carros as $carro) 
	{
		echo "$carro<br>";
	}

	
	//mostrando carray com for
	/*
	for ($pos = 0; $pos < count($carros); $pos++)
	{
		echo $carros[$pos]."<br>";
	}*/

	


	?>

</body>
</html>