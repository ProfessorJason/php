<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>Aula 11 - Foreach - Ex 02</title>
	<link rel="stylesheet" type="text/css" href="css/estilo.css">
</head>
<body>

	<h1>Laço For - Foreach Exemplo 02</h1>

	<?php include_once 'menu.php'; ?>

	<p>
		Crie um array carros contendo 5 posições. Em cada posição armazene uma marca e um modelo de carro. Ex: "Ford Fiesta". Mostre todos os valores deste array utilizando um foreach. Em seguida, crie um segundo array (carros2) que irá receber as posições invesas do primeiro array (ex: $carros2[0] = $carros[4]). Para tanto, utilize um for ou foreach.
	</p>

	<h3>Resultado</h3>

	<?php  

	$carros = array ("Ford Fiesta", "Chevrolet Celta", "Volkswagen Gol", 
		"Fiat Uno", "Renault Sandero");

	echo "<h4>Array Carros:</h4>";

	foreach ($carros as $carro) 
	{
		echo "$carro<br>";
	}

	echo "<h4>Array Carros2 (foreach):</h4>";

	
	$i = count($carros) - 1; // tamanho do array carros - 1 = ultima pos do array

	foreach ($carros as $pos => $carro) 
	{
		$carros2[$pos] = $carros[$i];
		$i--;

		echo "$carros2[$pos]<br>";
	}

	/////////////////////////////////////////////////////////////

	echo "<h4>Array Carros2 (for):</h4>";

	$p2 = count($carros) - 1; // tamanho do array carros - 1 = ultima pos do array

	for ($p1 = 0; $p1 < count($carros); $p1++)
	{
		// carros2 na posição p1 recebe carros na posição p2
		$carros2[$p1] = $carros[$p2];
		$p2--; // decrementa o contador p2

		echo "$carros2[$p1]<br>";
	}

	echo "<h4>Array Carros2 (while):</h4>";

	$c1 = 0; // primeira posição do array carros2
	$c2 = count($carros) -1; // a ultima posição do array carros

	while ($c1 < count($carros)) 
	{

		$carros2[$c1] = $carros[$c2];

		echo "$carros2[$c1]<br>";

		$c1++; // incrementa o primeiro contador
		$c2--; // decrementa o segundo contador
	    
	}


	?>

</body>
</html>
