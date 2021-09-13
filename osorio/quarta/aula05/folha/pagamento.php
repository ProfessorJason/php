<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>Aula 05 - Detalhes do Pagamento</title>
	<link rel="stylesheet" type="text/css" href="../css/estilo.css">
</head>
<body>

	<h1>Detalhes do Pagamento</h1>

	<?php  

	if (isset($_POST['calcular']))
	{
		// recebemos dados do formulário
		$nome	= $_POST['nome'];
		$valor 	= $_POST['valor'];
		$horas 	= $_POST['horas'];

		// calc do salario bruto
		$salario_bruto = $horas * $valor;

		// calc do IR
		if ($salario_bruto <= 1372.81)
		{
			$ir = 0;
		}
		else if ($salario_bruto <= 2743.25 )
		{
			$ir = 0.15 * $salario_bruto;
		}
		else
		{
			$ir = 0.275 * $salario_bruto;
		}

		// calc do INSS
		if ($salario_bruto <= 868.29)
		{
			$inss = 0.08 * $salario_bruto;
		}
		else if ($salario_bruto <= 1447.14)
		{
			$inss = 0.09 * $salario_bruto;
		}
		else if ($salario_bruto <= 2894.28)
		{
			$inss = 0.11 * $salario_bruto;
		}
		else
		{
			$inss = 318.37;
		}

		// calc do fgts
		$fgts = 0.08 * $salario_bruto;

		// calc do salario liquido
		$salario_liquido = $salario_bruto - $ir - $inss;

		// formtar valores monetários antes da saída de dados
		$valor = number_format($valor, "2", ",", ".");
		$salario_bruto = number_format($salario_bruto, "2", ",", ".");
		$ir =  number_format($ir, "2", ",", ".");
		$inss =  number_format($inss, "2", ",", ".");
		$fgts = number_format($fgts, "2", ",", ".");
		$salario_liquido =  number_format($salario_liquido, "2", ",", ".");

		// saída de dados

		echo "<h3>Folha de Pagamento</h3>";
		echo "Nome do funcionário: $nome<br>";
		echo "Horas trabalhadas no mês: $horas<br>";
		echo "Valor da hora de trabalho: R\$ $valor<br>";
		echo "Salário bruto: R\$ $salario_bruto<br>";
		echo "IR do mês: R\$ $ir<br>";
		echo "INSS do mês: R\$ $inss<br>";
		echo "FGTS: R\$ $fgts<br>";
		echo "Salário líquido: R\$ $salario_liquido";


	}// fim do if 'isset'


	?>


	<p>
		<a href="index.php">Voltar para home</a>
	</p>

</body>
</html>