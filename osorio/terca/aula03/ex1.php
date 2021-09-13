<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>Aula 03 - Exercício 01</title>
	<link rel="stylesheet" type="text/css" href="css/estilo.css">
</head>
<body>

	<h1>Aula 03 - Exercício 01</h1>

	<?php include_once 'menu.php'; ?>

	<h3>
		Calcular o aumento que será dado a um funcionário, obtendo do usuário as seguintes informações: salário atual e a porcentagem de aumento. Apresentar o novo valor do salário e o valor do aumento. 
	</h3>


	<?php  

	$salario = 2000;
	$percentual = 30.5;

	// calcular o aumento
	$aumento = $salario * ($percentual/100);
	$salario_final = $salario + $aumento;

	echo "<h4>O aumento foi de R\$ $aumento, e o novo salário é R\$ 
	$salario_final</h4>";


	?>


</body>
</html>