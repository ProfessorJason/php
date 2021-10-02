<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>Atividade 01 - Cadastrar</title>
	<link rel="stylesheet" type="text/css" href="../css/estilo.css">

</head>
<body>

	<h1>Atividade 01 - Cadastro</h1>

	<?php 

	if (isset($_POST['cadastrar']))
	{
		// recebendo entrada de dados
		$aparelho 		= $_POST['aparelho'];
		$consumo_max 	= $_POST['consumoMax'];
		$horas_dia 		= $_POST['horasDia'];
		$dias_mes 		= $_POST['diasMes'];
		$valor_kwh 		= $_POST['valorKwh'];

		// processamento
		$x = $consumo_max /1000;
		$consumo_dia = $x * $horas_dia;

		$consumo_mes = $consumo_dia * $dias_mes;

		$consumo_reais = $consumo_mes * $valor_kwh;

		// verificar categoria de consumo
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

		$valor_kwh = number_format($valor_kwh, '2', ',', '.');
		$consumo_reais = number_format($consumo_reais, '2', ',', '.');

		// saída de dados
		echo "<h4>Dados do aparelho cadastrado:</h4>";
		echo "Nome do aparelho: $aparelho<br>";
		echo "Consumo máximo em Watts: $consumo_max<br>";
		echo "Nº de horas que o aparelho fica ligado por dia: $horas_dia<br>";
		echo "Nº de dias que o aparelho fica ligado no mês: $dias_mes<br>";
		echo "Valor do kilowatt-hora: R\$ $valor_kwh<br>";
		echo "Consumo diário do aparelho: $consumo_dia<br>";
		echo "Consumo mensal do aparelho: $consumo_mes<br>";
		echo "Consumo do aparelho em reais: R\$ $consumo_reais<br>";
		echo "Categoria de consumo: $cat";
	}

	?>

	<p><a href="index.php">Voltar para home</a></p>

</body>
</html>