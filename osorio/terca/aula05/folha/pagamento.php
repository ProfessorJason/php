<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>Aula 05 - Exibir Pagamento</title>
	<link rel="stylesheet" type="text/css" href="../css/estilo.css">
</head>
<body>

	<h1>Dados da Folha de Pagamento</h1>

	<?php 

	if (isset($_POST['enviar']))
	{

		$nome	= $_POST['nome'];
		$horas	= $_POST['horas'];
		$valor  = $_POST['valor'];

		// salario bruto
		$sal_bruto = $valor * $horas;

		// calulo do IR
		if ($sal_bruto <= 1372.81)
		{
			$ir = 0;
		}
		else if ($sal_bruto <= 2743.25)
		{
			$ir = 0.15 * $sal_bruto;
		}
		else
		{
			$ir = 0.275 * $sal_bruto;
		}

		// calcular INSS
		if ($sal_bruto <= 868.29)
		{
			$inss = 0.08 * $sal_bruto;
		}
		else if ($sal_bruto <= 1447.14)
		{
			$inss = 0.09 * $sal_bruto;
		}
		else if ($sal_bruto <= 2894.28)
		{
			$inss = 0.11 * $sal_bruto;
		}
		else
		{
			$inss = 318.37;
		}

		// calculo do FGTS
		$fgts = 0.08 * $sal_bruto;

		// calculo do salario liquido
		$sal_liq = $sal_bruto - $ir - $inss;

		echo "<h4>";
			echo "Nome do funcionário: $nome<br>";
			echo "Horas trabalhadas no mês: $horas<br>";
			echo "Valor da hora: $valor<br>";
			echo "Salário bruto: $sal_bruto<br>";
			echo "IR: $ir<br>";
			echo "INSS: $inss<br>";
			echo "FGTS: $fgts<br>";
			echo "Salário líquido: $sal_liq";
		echo "</h4>";


	} 
	else
	{
		echo "<h3>Nenhum dado foi enviado para cálculo do pagamento...</h3>";
	}

	?>

	<p>
		<a href="index.php">Voltar para home</a>
	</p>

</body>
</html>