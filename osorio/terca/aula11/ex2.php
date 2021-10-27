<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>Aula 11 - Exercício 02</title>
	<link rel="stylesheet" type="text/css" href="css/estilo.css">
</head>
<body>

	<h1>Aula 11 - Exercício 02</h1>

	<?php include_once 'menu.php'; ?>

	<h3>Resultado:</h3>

	<?php  

	$valor = rand(1, 100);

	echo "<h4>Tabuada do $valor</h4>";

	for ($i = 1; $i <= 10 ; $i++) 
	{
		$res = $valor * $i;
		echo "$valor x $i = $res<br>";
	}


	?>

</body>
</html>