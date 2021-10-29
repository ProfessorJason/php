<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>Aula 13 - Ex 07</title>
	<link rel="stylesheet" type="text/css" href="css/estilo.css">
</head>
<body>

	<h1>Aula 13 - Exercício - Ex 07</h1>

	<?php include_once 'menu.php'; ?>

	<h3>
		Um funcionário de uma empresa recebe aumento salarial anualmente: Sabe-se que:
		<ul>
			<li>Esse funcionário foi contratado em 2015, com salário inicial de R$ 1.000,00;</li>
			<li>Em 2016 recebeu aumento de 1,5% sobre seu salário inicial;</li>
			<li>A partir de 2017 (inclusive), os aumentos salariais sempre correspondem ao dobro do percentual do ano anterior.</li>
		</ul>
		Faça um programa que determine o salário atual desse funcionário.
	</h3>

	<h3>Resultado:</h3>

	<?php  

	// 2015
	$salario = 1000;
	$ano = 2015;
	$ano_atual = date('Y'); // pega ano atual do servidor com 4 digitos

	$percentual = 0.0075;

	
	do {
	
		$percentual *= 2;
		$aumento = $salario * $percentual;
		$salario += $aumento;
		$ano++; // passou um ano

	} while ($ano < $ano_atual);

	// formatação do valor para padrão monetário
	$salario = number_format($salario, '2', ',', '.');

	echo "Salário do funcionário em $ano_atual: R$ $salario";


	?>


</body>
</html>	