<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>Aula 11 - Do/While - Ex 03</title>
	<link rel="stylesheet" type="text/css" href="../css/estilo.css">
</head>
<body>

	<h1>Aula 11 - Do/While - Exemplo 03</h1>

	<?php include_once '../menu.php'; ?>

	<p>
		Faça o programa percorrer o intervalo irregular entre -45 e 67. Para tanto, a variável 'x' irá aumentar seu valor em +2 a cada passagem do laço do/while. Mostre também o valor final de 'x' após o laço ter sido finalizado.
	</p>

	<h3>Resultado:</h3>

	<?php  

	$x = -45;

	do
	{
		echo "Valor atual de X: $x<br>";

		$x += 2; // $x = $x + 2;
	
	} while ($x <= 67);

	echo "<br>Valor final de X: $x";

	?>

</body>
</html>