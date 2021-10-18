<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>Aula 10 - Do/While - Ex 02</title>
	<link rel="stylesheet" type="text/css" href="../css/estilo.css">
</head>
<body>

	<h1>Laço Do/While - Exemplo 02</h1>

	<?php include_once '../menu.php'; ?>

	<p>
		mostre todos os valores pares entre 2 e 8. Utilize um do/while nesta resolução. Após mostrar todos os valores pares dentro deste intervalo, mostre o valor final do contador.
	</p>

	<h3>Resultado</h3>

	<?php  

	$x = 2;

	do{

		if ($x %2 == 0)
		{
			echo "Par atual: $x<br>";
		}

		$x++;

	} while ($x <= 8);

	echo "Valor final de X: $x";


	?>


</body>
</html>