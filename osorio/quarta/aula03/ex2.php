<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>Aula 03 - Exercício 02</title>
	<link rel="stylesheet" type="text/css" href="css/estilo.css">
</head>
<body>

	<h1>Aula 03 - Exercício 02</h1>

	<?php include_once 'menu.php'; ?>

	<h3>Calcular o volume de uma caixa (largura x altura x comprimento).</h3>

	<?php  

	// entrada
	$largura = 1.5;
	$altura = 3;
	$comprimento = 1;

	// processamento
	$volume = $largura * $altura * $comprimento;

	// saída
	echo "<h4>O volume da caixa com $largura x $altura x $comprimento (L x A x C) = 
	$volume cm³</h4>";

	?>

</body>
</html>