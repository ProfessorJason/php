<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>Aula 10 - While - Ex 01</title>
	<link rel="stylesheet" type="text/css" href="../css/estilo.css">
</head>
<body>

	<h1>Aula 10 - Laço While - Exemplo 01</h1>

	<?php include_once '../menu.php'; ?>

	<p>
		Faça a variável 'x' iniciar com um valor aleatório entre 1 e 9. Enquanto ela for menor que 10, mostre o valor de 'x' na tela e aumente seu valor em 1 unidade após isso.
	</p>

	<h3>Resultado:</h3>

	<?php  

	$x = rand(1, 9);

	while ($x < 10)
	{
		echo "Valor atual de X:$x<br>";
		$x++;
	}

	?>

</body>
</html>