<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>Aula 04 - Exemplo 5</title>
	<link rel="stylesheet" type="text/css" href="css/estilo.css">
</head>
<body>

	<h1>Aula 04 - Rxemplo 5</h1>

	<?php include_once 'menu.php'; ?>

	<h3>
		Elabore um algoritmo que leia o nome de um funcionário, a quantidade de dependentes até 14 anos e o valor do salário base. Com nessas informações deve ser calculado o valor do INSS e o valor do salário família (conforme é apresentado nas tabelas). Escrever no final o valor do salário líquido, que seria nesse caso: salário base – valor inss + valor salário família
	</h3>

	<form action="exp5.php" method="post">
		
		<p>
			<label>Nome do funcionário:</label><br>
			<input type="text" name="nome" required>
		</p>

		<p>
			<label>Salário base R$:</label><br>
			<input type="number" name="salario" min="100" step="0.01" required>
		</p>

		<p>
			<label>Quantidade de dep. até 14 anos:</label><br>
			<input type="number" name="dependentes" min="0" required>
		</p>

		<p>
			<button type="submit" name="enviar">Enviar</button>
		</p>

	</form>

	<?php  

	if (isset($_POST['enviar']))
	{
		$nome = $_POST['nome'];
		$salario = $_POST['salario'];
		$dependentes = $_POST['dependentes'];

		// calculo do inss
		if ($salario <= 800)
		{
			$inss = 0.07 * $salario;
		}
		else if ($salario <= 1200)
		{
			$inss = 0.08 * $salario;
		}
		else if ($salario <= 1500)
		{
			$inss = 0.09 * $salario;
		}
		else
		{
			$inss = 135;
		}

		// calculo do salario-familia
		if ($salario <= 1450)
		{
			$salario_familia = 250 * $dependentes;
		}
		else if ($salario <= 2600)
		{
			$salario_familia = 200 * $dependentes;
		}
		else
		{
			$salario_familia = 0;
		}

		// salario final
		$salario_final = $salario - $inss + $salario_familia;

		echo "<p>$nome, seu salário base é R\$ $salario, você possui $dependentes dependente(s) até 14 anos, seu desconto do INSS será de R\$ $inss, seu salário família será de R\$ $salario_familia, e seu salário líquido será de R\$ $salario_final</p>";

	}

	?>

</body>
</html>