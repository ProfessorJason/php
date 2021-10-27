<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>Aula 11 - Exercício 07</title>
	<link rel="stylesheet" type="text/css" href="css/estilo.css">
</head>
<body>

	<h1>Aula 11 - Exercício 07</h1>

	<?php include_once 'menu.php'; ?>

	<h3>Resultado:</h3>

	<?php  

	$salario = 1000; // valor inicial do salário

	$percentual = 0.015; // percentual inicial de aumento em 1996
	$salario += $salario * $percentual; // salário em 1996

	$ano_atual = date("Y"); // pegar ano atual do servidor
	
	$ano = 1997; // ano a partir do momento que dobra  opercentual de aumento
	while ($ano <= $ano_atual)
	{
		$percentual *= 2; // dobra o percentual
		$salario += $salario * $percentual;
		$ano++; // passou um ano
	}
	// formatar para padrão monetário brasileiro
	$salario = number_format($salario, '2', ',', '.');
	echo "O salário do funcionário em $ano_atual é: R$ $salario";


	?>



</body>
</html>