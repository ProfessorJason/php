<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>Aula 05 - Folha Calculada</title>
	<link rel="stylesheet" type="text/css" href="../css/estilo.css">
</head>
<body>

	<h1>Folha de Pagamento Calculada</h1>

	<?php  

	if (isset($_POST['calcular']))
	{

		$nome	= $_POST['nome'];
		$horas	= $_POST['horas'];
		$valor 	= $_POST['valor'];

		// calcular salário bruto
		$sal_bruto = $horas * $valor;

		// calcular o IR
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

		// calcular o INSS
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

		// calcular o FGTS
		$fgts = 0.08 * $sal_bruto;

		// calcular o salário liquido
		$sal_liquido = $sal_bruto - $ir - $inss;

		// formatar valores monetários antes da saída de dados
		$valor = number_format($valor, '2', ',', '.');
		$sal_bruto = number_format($sal_bruto, '2', ',', '.');
		$ir = number_format($ir, '2', ',', '.');
		$inss = number_format($inss, '2', ',', '.');
		$fgts = number_format($fgts, '2', ',', '.');
		$sal_liquido = number_format($sal_liquido, '2', ',', '.');

		// mostrar valores calculados
		echo "<h3>Dados do Pagamento</h3>";
		echo "Nome do funcionário: $nome<br>";
		echo "Horas trabalhadas no mês: $horas<br>";
		echo "Valor da hora: R\$: $valor<br>";
		echo "Salário bruto: R\$: $sal_bruto<br>";
		echo "IR: R\$: $ir<br>";
		echo "INSS: R\$ $inss<br>";
		echo "FGTS: R\$ $fgts<br>";
		echo "Salário líquido: R\$ $sal_liquido";


	}
	else
	{
		echo "<h4>Atenção: nenhum dado foi enviado para cálculo</h4>";
	}

	?>

	<p>
		<a href="index.php">Voltar para Home</a>
	</p>

</body>
</html>