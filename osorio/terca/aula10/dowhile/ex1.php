<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>Aula 10 - Do/While - Ex 01</title>
	<link rel="stylesheet" type="text/css" href="../css/estilo.css">
</head>
<body>

	<h1>Aula 10 - Laço Do/While - Exemplo 01</h1>

	<?php include_once '../menu.php'; ?>

	<p>
		Mostrar o valor da variável 'x' na tela enquanto ela for menor que 10. Entrtetantom faça ela iniciar de 19.
	</p>

	<h3>Resultado:</h3>

	<?php  

	$x = 19;

	do {
		echo "Valor de x: $x <br>";
		$x++;

	} while ($x < 10);

	?>

</body>
</html>