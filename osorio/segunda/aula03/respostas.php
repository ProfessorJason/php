<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>Aula 03 - Respostas</title>
	<link rel="stylesheet" type="text/css" href="css/estilo.css">
</head>
<body>

	<h1>Aula 03 - Respostas</h1>

	<?php include_once 'menu.php' ?>

	<h2>Esta página exibe apenas as respostas dos exercícios</h2>
	
	<?php  

	// verificar se o formulário que contem o botão enviarEx1 foi enviado
	if (isset($_POST['enviarEx1'])) 
	{
		// receber os dados do formulário do ex1:
		$nome = $_POST['nome'];
		$salario = $_POST['salario'];
		$percentual = $_POST['percentual'];

		// processamento
		$percentual_decimal = $percentual/100;
		$aumento = $percentual_decimal * $salario;
		$salario_final = $salario + $aumento;

		// FORMATAR valores numéricos das variáveis
		$salario = number_format($salario, 2, ',', '.');
		$aumento = number_format($aumento, 2, ',', '.');
		$percentual = number_format($percentual, 1);
		$salario_final = number_format($salario_final, 2, ',', '.');


		echo "<h3>Resposta Ex 01:</h3>";

		echo "<h3>$nome, seu salário atual é R\$ $salario, você recebeu $percentual % de aumento (R\$ $aumento), e seu salário final é R\$ $salario_final</h3>";
	}

	// verificar se o formulário que contem o botão enviarEx2 foi enviado
	if (isset($_GET['enviarEx2'])){

		$largura = $_GET['largura'];
		$altura = $_GET['altura'];
		$comprimento = $_GET['comprimento'];

		// processamento
		$volume = $largura * $altura * $comprimento;

		$volume = number_format($volume, 1); // formatar variável para conter apenas uma casa decimal

		echo "<h3>Resposta Exercício 02:</h3>";

		echo "<h3>Volume da caixa (L x A x C = $largura x $altura x $comprimento) = 
		$volume cm³";
	}

	// verirficar se o formuláro que contem o botao 'enviarEx3' foi enviado
	if (isset($_POST['enviarEx3'])){

		$ano = $_POST['anoNasc'];

		$ano_atual = date("Y"); // armazena ano atual

		$idade = $ano_atual - $ano; // cálculo da idade

		echo "<h3>Resposta do exercício 03:</h3>";

		echo "<h3>Sua idade em $ano_atual é/será $idade anos</h3>";
	}

	// verificar se o formulário que ciontem o botão 'enviarEx5' foi enviado
	if (isset($_POST['enviarEx5'])){

		$bim1 = $_POST['bim1'];
		$bim2 = $_POST['bim2'];
		$bim3 = $_POST['bim3'];
		$bim4 = $_POST['bim4'];

		$media = ($bim1 + $bim2 + $bim3 + $bim4) / 4;

		$media = number_format($media, 1);

		echo "<h3>Resposta do exercício 05:</h3>";

		echo "<h3>Sua média final é: $media</h3>";

	}

	?>


</body>
</html>