<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>Aula 10(b) - Do/While - Ex 03</title>
	<link rel="stylesheet" type="text/css" href="../css/estilo.css">
</head>
<body>

	<h1>Laço Do/While - Exemplo 03</h1>

	<?php include_once 'menu.php'; ?>

	<h3>
		Faça uma contagem regressiva, iniciando em 10 e chegando à 0. Utilize para tanto um laço do/while.
	</h3>

	<h4>Resultado:</h4>

	<?php  

	$cont = 10;

	do {

		echo "$cont <br>";
		$cont--; // diminui em 1 o valor do cont

	} while ($cont >= 0);

	echo "Lançar foguete!";

	?>

</body>
</html>