<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>Aula 10 - Do/While - Ex 03</title>
	<link rel="stylesheet" type="text/css" href="../css/estilo.css">
</head>
<body>

	<h1>Laço Do/While - Exemplo 03</h1>

	<?php include_once '../menu.php'; ?>

	<p>
		Mostre os possíveis valores de $x na tela, iniciando ele com um valor aletório entre 1 e 5, indo até um valor aletório entre 5 e 10, aumentando seu valor a cada vez em que $x é exibido na tela em 2 unidades;
	</p>

	<h3>Resultado:</h3>

	<?php  

	// valor inicial de $x 
	$x = rand(1, 5); // valor aleatório entre 1 e 3
	$final = rand(5, 10); // valor aleatório entre 7 e 10

	do {
		echo "Valor atual de X: $x<br>";

		$x+= 2;

	} while ($x <= $final);

	?>

</body>
</html>