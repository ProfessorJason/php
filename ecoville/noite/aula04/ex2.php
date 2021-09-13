<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>Aula 04 - Exercício 02</title>
	<link rel="stylesheet" type="text/css" href="css/estilo.css">
</head>
<body>

	<h1>Aula 04 - Exercício 02</h1>

	<?php include_once 'menu.php'; ?>

	<h3>
		Crie um algoritmo que leia o salário de uma pessoa e com base nesse salário, faça o cálculo e imprima o valor do desconto de INSS.
	</h3>

	<form action="ex2.php" method="post">
		
		<p>
			<label>Informe o salário do funcionário:</label><br>
			<input class="inputs" type="number" name="salario" min="600" step="0.01" required>
		</p>

		<p>
			<button type="submit" name="enviar">Enviar</button>
		</p>

	</form>

	<?php  

	if (isset($_POST['enviar']))
	{
		$salario = $_POST['salario'];

		if ($salario <= 750)
		{
			// separador de casa decimal na programação é o . (ponto) não a , (vírgula)
			$inss = 0.07 * $salario;
		}
		else if ($salario <= 900)
		{
			$inss = 0.08 * $salario;
		}
		else if ($salario <= 1200)
		{
			$inss = 0.09 * $salario;
		}
		else
		{
			$inss = 0.10 * $salario;
		}

		$salario = number_format($salario, "2", ",", ".");
		$inss    = number_format($inss, "2", ",", ".");

		echo "<p>O salário do funcionário R\$ $salario, logo, seu desconto do INSS 
		será de R\$ $inss</p>";

	}// fim do if 'isset'

	?>


</body>
</html>