<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>Folha de pagamento</title>
	<link rel="stylesheet" type="text/css" href="../css/estilo.css">
</head>
<body>

	<h1>Dados da Folha de Pagamento</h1>

	<?php  

	if (isset($_POST['enviar']))
	{
		$nome = $_POST['nome'];
		$horas = $_POST['horas'];
		$valor_hora = $_POST['valorHora'];

		// calculo salario bruto
		$sal_bruto = $horas * $valor_hora;

		// calculo do IR com base no valor do salario bruto
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

		// calculo do inss com base no valor do salário bruto
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

		// calculo do fgts : 8% do salario bruto
		$fgts = 0.08 * $sal_bruto;

		// salario liquido
		$sal_liquido = $sal_bruto - $ir - $inss;

		// formatar a saída de dados para os valores monetários
		$sal_bruto = number_format($sal_bruto, "2", ",", ".");
		$ir = number_format($ir,"2", ",", ".");
		$inss = number_format($inss, "2", ",", ".");
		$fgts = number_format($fgts, "2", ",", ".");
		$sal_liquido = number_format($sal_liquido, "2", ",", ".");


		echo "<h3>";
		echo "Funcionário: $nome<br>";
		echo "Horas trabalhadas: $horas<br>";
		echo "Valor da hora: $valor_hora<br>";
		echo "Salário bruto: $sal_bruto<br>";
		echo "Desconto do IR: $ir<br>";
		echo "Desconto do INSS: $inss<br>";
		echo "FGTS do mês: $fgts<br>";
		echo "Salário líquido: $sal_liquido";
		echo "</h3>";


	}
	else
	{
		echo "<h3>ATENÇÃO: Nenhum dado de formulário recebido</h3>";
	}

	?>

	<p><a href="index.php">Voltar para home</a></p>

</body>
</html>