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

	<h3>
		Calcular o volume de uma caixa (largura x altura x comprimento).
	</h3>


	<?php  

	$largura = 1.3;
	$altura = 2.4;
	$comprimento = 2;

	$volume = $largura * $altura * $comprimento;

	echo "<h4>Volume da caixa ($largura x $altura x $comprimento) = 
	$volume cm³</h4>";


	?>


</body>
</html>