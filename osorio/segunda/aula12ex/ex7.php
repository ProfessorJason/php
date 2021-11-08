<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>Aula 12 - Exercício 07</title>
	<link rel="stylesheet" type="text/css" href="css/estilo.css">
</head>
<body>

	<h1>Aula 12 - Exercício 07</h1>

	<?php include_once 'menu.php'; ?>

	<h3>
		Um funcionário de uma empresa recebe aumento salarial anualmente: Sabe-se que:
		<ol>
			<li>Esse funcionário foi contratado em 2015, com salário inicial de R$ 1.000,00;</li>
			<li>Em 2016 recebeu aumento de 1,5% sobre seu salário inicial;</li>
			<li>A partir de 2017 (inclusive), os aumentos salariais sempre correspondem ao dobro do percentual do ano anterior.</li>
		</ol>
		Faça um programa que determine o salário atual desse funcionário.
	</h3>

	<h4>Resultado</h4>

	<?php  

	$salario = 1000; // salario inicial do funcionario
	$ano = 2015; // ano de contratação

	$percentual = 0.015; // aumento inicial de 1.5% (1.5 / 100)
	$aumento = $salario * $percentual; // calculo do aumento
	$salario += $aumento; // somando aumento ao salário
	$ano++; // ano +1 = 2016

	// armazenar o ano atual através de dado recebido do servidor
	$ano_atual = date("Y"); // Y retorna ano com 4 digitos. ex: 2021

	do {

		// dobrar o percentual de aumento do ano anterior
		$percentual *= 2;
		$aumento = $salario * $percentual; // calculo do aumento
		$salario += $aumento; // somando o aumento do salário
		$ano++; // passou +1 ano


	} while ($ano < $ano_atual);

	// formatação monetária do valor do salário
	$salario = number_format($salario, '2', ',', '.');

	echo "Salário do funcionário em $ano_atual: R$ $salario";


	?>


</body>
</html>