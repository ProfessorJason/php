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

	// receber dados de salário e percentual de aumento:
	$salario = 5300;
	$percentual = 3;

	// calcular o valor do auemnto (lembrando que, por ex: 15% = 15/100 = 0.15)

	// para calcular o valor do aumento, basta multiplicar o percentual (dividios por 100) pelo valor do salário
	$aumento = $salario * ($percentual/100);

	// calcualr salário final (salário + aumento)
	$salario_final = $salario + $aumento;

	echo "<h4>Seu novo salário é R\$ $salario_final, e você teve R\$ $aumento de aumento salárial</h4>";

	?>

</body>
</html>