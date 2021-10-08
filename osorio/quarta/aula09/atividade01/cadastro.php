<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>Atividade 01 - Cadastro</title>
	<link rel="stylesheet" type="text/css" href="../css/estilo.css">
</head>
<body>

	<h1>Aparelho Cadastrado</h1>

	<?php  

	if (isset($_POST['cadastrar']))
	{
		// entrada de dados (via form)
		$aparelho	 = $_POST['aparelho'];
		$consumo_max = $_POST['consumoMax'];
		$horas_dia	 = $_POST['horasDia'];
		$dias_mes	 = $_POST['diasMes'];
		$valor_kwh	 = $_POST['valorKwh'];

		// processamento
		// consumo diário:
		$x = ($consumo_max / 1000);
		$consumo_diario = $x * $horas_dia;

		// consumo mensal
		$consumo_mensal = $consumo_diario * $dias_mes;

		// consumo em reais
		$consumo_reais = $consumo_mensal * $valor_kwh;

		// verificar cateoria de consumo
		if ($consumo_reais <= 5)
		{
			$cat = "Baixa";
		}
		else if ($consumo_reais <= 10)
		{
			$cat = "Moderada";
		}
		else
		{
			$cat = "Elevada";
		}

		// formatar valores monetarios
		$valor_kwh = number_format($valor_kwh, '2', ',', '.' );
		/* forma simples:
		number_format(valor, quantas casas decimais quer mostrar)

		forma completa:
		number_format(valor, casas decimais , separador decimal, separador milhar)
		*/

		$consumo_reais = number_format($consumo_reais, '2', ',', '.');
		// ex: 1000.00 = 1.000,00

		// saída de dados
		echo "<strong>Nome do Aparelho</strong>: $aparelho<br>";
		echo "<strong>Consumo máximo em watts</strong>: $consumo_max w<br>";
		echo "<strong>Quantas horas fica ligado ao dia</strong>: $horas_dia h<br>";
		echo "<strong>Quantos dias fica ligado por mês</strong>: $dias_mes dias<br>";
		echo "<strong>Valor do Kilowatt-hora R$ </strong>: $valor_kwh<br>";
		echo "<strong>Consumo diário</strong>: $consumo_diario w<br>";
		echo "<strong>Consumo mensal</strong>: $consumo_mensal w<br>";
		echo "<strong>Consumo em reais: R$ </strong>: $consumo_reais<br>";
		echo "<strong>Categoria de consumo</strong>: $cat<br>";

	}
	else
	{
		echo "<h3>Nenhum aparelho foi cadastrado ainda...</h3>";
	}

	?>

	<p>
		<a href="index.php">Voltar para home</a>
	</p>

</body>
</html>