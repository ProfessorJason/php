<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>Aula 10 - While - Ex 01</title>
	<link rel="stylesheet" type="text/css" href="../css/estilo.css">
</head>
<body>

	<h1>Laço While - Exemplo 01</h1>

	<?php include_once '../menu.php'; ?>

	<p>
		Sabendo que a variável $x inicia em 0 e, a cada execução de um <i>loop</i> ela incrementa eu valor em +3, mostr eo valor de $x na tela enquanto ela for menor que 10.
	</p>

	<h3>Resultado</h3>

	<?php  

	$x = 0;

	while ($x < 10)
	{
		echo "Valor atual de 'X':$x<br>";
		// alterar o valor da variável de controle
		$x += 3;
	}


	?>

</body>
</html>