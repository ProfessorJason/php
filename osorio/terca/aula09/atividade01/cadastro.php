<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>Atividade Prática 01 - Cadastro</title>
	<link rel="stylesheet" type="text/css" href="../css/estilo.css">
</head>
<body>

	<h1>Aparelho Cadastrado</h1>

	<?php 

	if (isset($_POST['cadastrar']))	
	{

		// entrada de dados (via form)
		$aparelho	 = $_POST['aparelho'];
		$consumo_max = $_POST['consumoMaximo'];
		$horas 		 = $_POST['horas'];
		$dias 		 = $_POST['dias'];
		$valor_kwh	 = $_POST['valorKwh'];

		// processamento

		// consumo diário
		$x = $consumo_max / 1000;
		$consumo_diario = $x * $horas;

		// consumo mensal
		$consumo_mensal = $consumo_diario * $dias;

		// consumo em reais
		$consumo_reais = $consumo_mensal * $valor_kwh;

		// categoria de consumo
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

		// formatação dos valores monetários
		$valor_kwh = number_format($valor_kwh, '2', ',', '.'); // ex: 1000.00 = 1.000,00
		$consumo_reais = number_format($consumo_reais, '2', ',', '.');

		// saída de dados
		echo "<strong>Nome do aparelho</strong>: $aparelho<br>";
		echo "<strong>Consumo máximo em watts:</strong>: $consumo_max w<br>";
		echo "<strong>Nº de horas que fica ligado por dia:</strong>: $horas h<br>";
		echo "<strong>Nº de dias que fica ligado por mês:</strong>: $dias dias<br>";
		echo "<strong>Valor do Kilowatt-hora: R$</strong>: $valor_kwh<br>";
		echo "<strong>Consumo diário</strong>: $consumo_diario w<br>";
		echo "<strong>Consumo mensal</strong>: $consumo_mensal w<br>";
		echo "<strong>Consumo do aparelho em R$: </strong>: $consumo_reais<br>";
		echo "<strong>Categoria de consumo:</strong>: $cat<br>";


	}
	else
	{
		echo "<h4>Aparelho não cadastrado</h4>";
	}

	?>

	<p>
		<a href="index.php">Voltar para Home</a>
	</p>

</body>
</html>