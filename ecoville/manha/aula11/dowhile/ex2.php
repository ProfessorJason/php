<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>Aula 11 - Do/While - Ex2</title>
	<link rel="stylesheet" type="text/css" href="../css/estilo.css">
</head>
<body>

	<h1>Do/While - Exemplo 02</h1>

	<?php include_once '../menu.php'; ?>

	<h3>
		Exibir uma sequência numérica baseada na seguinte lógica: <br>
		<ul>
			<li>O primeiro valor da sequência deverá ser -10</li>
			<li>O próximio valor, deverá ser o anterior +2</li>
			<li>A sequência deverá ser executada até que o valor seja 0</li>
		</ul>
	</h3>

	<h4>Resultado:</h4>

	<?php  

	$x = -10;

	do {

		echo "Valor atual de 'x': $x <br>";

		$x += 2;

	} while ($x <= 0);

	echo "Valor final de 'x' (fora da sequência pedida): $x";

	?>

</body>
</html>