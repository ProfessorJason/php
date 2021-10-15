<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>Aula 11 - Do/While - Ex1</title>
	<link rel="stylesheet" type="text/css" href="../css/estilo.css">
</head>
<body>

	<h1>Do/While - Exemplo 01</h1>

	<?php include_once '../menu.php'; ?>

	<h3>
		Faça um programa mostrar na tela os valores de 'x' enquanto ele for menor que 10. Mas, para este execício, utilize um laço do/while e faça a variável 'x' iniciar em 10. Veja o que acontece.
	</h3>

	<h4>Resultado:</h4>

	<?php  

	$x = 10;

	do { // faça

		echo "Valor atual de 'x': $x <br>";
		$x++; // aumentar o valor de x

	} while ($x < 10); // enquanto a condição for verdadeira

	echo "Valor final de 'x': $x";
	?>

</body>
</html>