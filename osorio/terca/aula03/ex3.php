<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>Aula 03 - Exercício 03</title>
	<link rel="stylesheet" type="text/css" href="css/estilo.css">
</head>
<body>

	<h1>Aula 03 - Exercício 03</h1>

	<?php include_once 'menu.php'; ?>

	<h3>
		Calcular a idade de uma pessoa, tendo em vista que a mesma irá digitar o ano do seu nascimento.
	</h3>

	<?php  

	$ano_nasc = 1953;
	$ano_atual = date("Y"); // pega ano atual com 4 digitos

	$idade = $ano_atual - $ano_nasc;

	echo "<h4>Sua idade em $ano_atual é/será $idade anos</h4>";

	?>

</body>
</html>