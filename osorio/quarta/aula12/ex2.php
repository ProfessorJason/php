<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>Aula 12 - Exercício 02</title>
	<link rel="stylesheet" type="text/css" href="css/estilo.css">
</head>
<body>

	<h1>Aula 12 - Exercício 02</h1>

	<?php include_once 'menu.php'; ?>

	<h3>
		Crie um algoritmo que mostre a tabuada de um valor qualquer (a sua escolha), mostrando os resultados da multiplicação deste valor de 1 até 10.
	</h3>

	<h4>Resultado</h4>

	<?php  
	
	// gerar um valor aleatório para cálculo da tabuada
	$x = rand(1, 100); // valor aleatório entre 1 e 100

	echo "<p>Tabuada do $x</p>";

	// calular e mostrar taduada ebtre x1 até x10.
	for ($i = 1; $i <= 10 ; $i++) 
	{
		// calculo da multiplicação
		$res = $x * $i;	
		// mostrar o calculo atual
		echo "$x x $i = $res<br>";
	}


	?>


</body>
</html>