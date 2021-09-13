<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>Aula 04 - Exemplo 4</title>
	<link rel="stylesheet" type="text/css" href="css/estilo.css">
</head>
<body>

	<h1>Aula 04 - Exemplo 4</h1>

	<?php include_once 'menu.php'; ?>

	<h3>
		Faça um programa que receba o salário e a quantidade de filhos de um funcionário. Com base no valor do salário e na quantidade de filhos, calcule e mostre qual será o novo valor do salário que esse funcionário receberá, já incluído o valor do auxílio-escola.
	</h3>

	<form action="exp4.php" method="post">
		
		<p>
			<label>Informe o salário:</label><br>
			<input type="number" name="salario" min="800" step="0.01" required>
		</p>

		<p>
			<label>Quantidade de filhos:</label><br>
			<input type="number" name="filhos" min="0" required>
		</p>

		<p>
			<button type="submit" name="enviar">Enviar</button>
		</p>

	</form>

	<?php  

	if (isset($_POST['enviar']))
	{

		$salario = $_POST['salario'];
		$filhos  = $_POST['filhos'];


		// salario < 2300
		if ($salario < 2300)
		{

			if ($filhos <= 2) // até 2 filhos
			{
				$aux = $filhos * 50; // 50 reais de auxilio por filho
			}
			else // mais que 2 filhos
			{
				$aux = $filhos * 70; // 70 reais de auxilio por filho
			}

		}
		else if ($salario < 2500) // salário entre 2300 e 2500
		{

			if ($filhos <= 2) // até 2 filhos
			{
				$aux = $filhos * 40; // 40 reais de auxilio por filho
			}
			else // mais de 2 filhos
			{
				$aux = $filhos * 60; // 60 reais de auxilio por filho
			}

		}
		else // qualquer valor para salário superior a 2500
		{

			if ($filhos <= 2) // até 2 filhos
			{
				$aux = $filhos * 30; // 30 reais de auxilio por filho
			}
			else // mais de 2 filhos
			{
				$aux = $filhos * 20; // 20 reais de auxilio por filho
			}

		}

		$salario_final = $salario + $aux;

		echo "<p>Seu salário base é R\$ $salario, você tem $filhos filhos, portanto, seu auxílio-escola será de R\$ $aux, e seu salário final será de R\$ $salario_final</p>";

	}


	?>

</body>
</html>