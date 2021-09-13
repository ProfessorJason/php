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

	<h3>Calcular a idade de uma pessoa, tendo em vista que a mesma irá digitar o ano do seu nascimento.</h3>

	<?php 

	$ano_nasc = 1990;
	$ano_atual = date("Y"); // esta função pega a data atual do servidor
	// no caso d valor "Y", a função irá retornar o ano atual com 4 digitos (ex: 2021)

	$idade = $ano_atual - $ano_nasc;

	echo "<h4>Em $ano_atual você terá $idade anos de vida</h4>";

	?>


</body>
</html>