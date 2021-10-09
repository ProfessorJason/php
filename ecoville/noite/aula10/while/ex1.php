<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>Aula 10 - While - Exemplo 01</title>
	<link rel="stylesheet" type="text/css" href="../css/estilo.css">
</head>
<body>

	<h1>Aula 10 - While - Exemplo 01</h1>

	<?php include_once 'menu.php'; ?>

	<h4>
		Mostrar o valor da variável $x na tela enquanto ela for menor que 10. <br>
		Para tanto, ela deve iniciar em -5, e a cada pasasgem do laço <i>while</i>, ela deverá ser incrementada em 3 unidades.
	</h4>

	<?php  

	$x = -5;

	while ($x < 10)
	{
		echo "Valor atual de 'x': $x<br>";
		$x += 3; // mesma coisa que: $x = $x + 3;
	}

	?>

</body>
</html>
