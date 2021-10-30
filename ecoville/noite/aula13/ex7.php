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

	$salario = 1000; // salario inicial
	$ano = 2015; // ano da contratação

	// 2016
	$percentual = 0.015; // 1.5% de aumento
	$aumento = $salario * $percentual;
	$salario += $aumento;

	$ano_final = date('Y'); // retorna o ano com 4 digitos, ex: 2021

	do { // a partir de 2017

		$percentual *= 2; // dobramos o percentual de aumento
		$aumento = $salario * $percentual; // calculamos o aumento
		$salario += $aumento; // efetuamos o aumento
		$ano++; // passou +1 ano

	} while ($ano < $ano_final);

	// formatar salário no padrão monetário
	$salario = number_format($salario, '2', ',', '.');

	echo "O salário do funcionário em $ano_final = R$ $salario";

	?>


</body>
</html>	