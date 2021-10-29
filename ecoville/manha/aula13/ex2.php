<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>Aula 13 - Ex 02</title>
	<link rel="stylesheet" type="text/css" href="css/estilo.css">
</head>
<body>

	<h1>Aula 13 - Exercício - Ex 02</h1>

	<?php include_once 'menu.php'; ?>

	<h3>
		Crie um algoritmo que mostre a tabuada de um valor qualquer (a sua escolha), mostrando os resultados da multiplicação deste valor de 1 até 10.
	</h3>

	<h3>Resultado:</h3>

	<?php  

	$x = rand(1, 100); // gerar valor aleatório entre 1 e 100

	echo "<h4>Tabuada do $x</h4>";

	for ($cont = 1; $cont <= 10; $cont++)
	{
		$res = $x * $cont;
		echo "$x X $cont = $res<br>";
	}


	?>

</body>
</html>	