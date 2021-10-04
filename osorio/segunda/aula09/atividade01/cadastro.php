<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>Atividade Prática 01 - Dados do Aparelho</title>
	<link rel="stylesheet" type="text/css" href="../css/estilo.css">
</head>
<body>

	<h2>Dados do Aparelho Eletrônico</h2>

	<?php  

	if (isset($_POST['cadastrar']))
	{

		// entrada dos dados (via form)
		$aparelho 	 = $_POST['aparelho'];
		$consumo_max = $_POST['consumoMax'];
		$horas_dia 	 = $_POST['horasDia'];
		$dias_mes 	 = $_POST['diasMes'];
		$valor_kwh 	 = $_POST['valorKwh'];

		// processamento

		// consumo diário do aparelho
		$x = $consumo_max / 1000;
		$consumo_diario = $x * $horas_dia;

		// consumo mensal
		$consumo_mensal = $consumo_diario * $dias_mes;

		// consumo do aprelho em reais
		$consumo_reais = $consumo_mensal * $valor_kwh;

		// categoria de consumo
		if ($consumo_reais <= 5)
		{
			$cat = "Baixa";
		}
		else if ($consumo_reais > 5 && $consumo_reais <= 10)
		{
			$cat = "Moderada";
		}
		else
		{
			$cat = "Elevada";
		}

		// formatação dos valores monetários:
		$valor_kwh = number_format($valor_kwh, '2', ',', '.');
		$consumo_reais = number_format($consumo_reais, '2', ',' ,'.');


		// saída de dados
		echo "Nome do aparelho: $aparelho<br>"; // interpolação
		echo "Consumo máximo em watts: " . $consumo_max . " watts<br>"; // concatenação
		echo "Nº de horas que o aparelho fica ligado no dia: $horas_dia h<br>";
		echo "Nº de dias que o aparelho fica ligado no mês: $dias_mes dias<br>";
		echo "Valor do kilowat-hora: R$: $valor_kwh<br>";
		echo "Consumo diário do aparelho: $consumo_diario watts<br>";
		echo "Consumo mensal do aprelho: $consumo_mensal watts<br>";
		echo "Consumo em reais: R$ $consumo_reais<br>";
		echo "Categoria de consumo: $cat<br>";



	}
	else
	{
		echo "<h3>Aparelho não cadastrado</h3>";
	}


	?>

	<p>
		<a href="index.php">Voltar para home</a>
	</p>

</body>
</html>