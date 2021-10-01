<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>Atividade Prática 01 - Dados do aparelho</title>
	<link rel="stylesheet" type="text/css" href="../css/estilo.css">
</head>
<body>

	<h1>Atividade Prática 01 - Aparelho Cadastrado</h1>

	<?php  

	if (isset($_POST['enviar']))
	{

	    // armazenamento dos dados de entrada
		$aparelho = $_POST['aparelho'];
		$consumo_max = $_POST['consumoMax'];
		$horas_dia = $_POST['horasDia'];
		$dias_mes = $_POST['diasMes'];
		$valor_kwh = $_POST['valorKwh'];

	    // processamento
		$x = $consumo_max / 1000;
		$consumo_dia = $x * $horas_dia;

		$consumo_mes = $consumo_dia * $dias_mes;

		$consumo_reais = $consumo_mes * $valor_kwh;

		$consumo_reais = number_format($consumo_reais, '2', ',', '.');

		echo "<p>";
		echo "Nome do aparelho: $aparelho<br>";
		echo "Consumo máximo em watts: $consumo_max w<br>";
		echo "Nº de horas que o aparelho ficará ligado no dia: $horas_dia h<br>";
		echo "Nº de dias que o aparelho ficará ligado do mês: $dias_mes dias<br>";
		echo "Valor do Kilowatt-hora: R\$ $valor_kwh<br>";
		echo "Consumo diário do aparelho: $consumo_dia w<br>";
		echo "Consumo mensal do aparelho: $consumo_mes w<br>";
		echo "Consumo do aparelho em R\$: $consumo_reais";
		echo "</p>";

	}
	?>

	<p><a href="index.php">Voltar para home</a></p>

</body>
</html>