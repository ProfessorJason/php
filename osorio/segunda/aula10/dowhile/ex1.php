<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>Aula 10 - Do/While - Ex 01</title>
	<link rel="stylesheet" type="text/css" href="../css/estilo.css">
</head>
<body>

	<h1>Laço Do/While - Exemplo 01</h1>

	<?php include_once '../menu.php'; ?>

	<p>
		Mostre todos os possíveis valores de $x enquanto ele for menor que 10. Porém, inicie a variável em 10 e teste a execução do seu programa utilizando para tanto um laço <i>do/while</i>
	</p>

	<h3>Resultado</h3>

	<?php  

	$x = 10;

	do {
		
		echo "Valor atual de X = $x<br>";
		$x++; // aumentar valor de x
	
	} while ($x < 10);
	// depois de executados os comandos é que o laço verifica se a condiçção
	// de execução é verdadeira. Se for, ele repete a execução dos comandos.
	// Senão, ele sai do laço.

	?>

</body>
</html>