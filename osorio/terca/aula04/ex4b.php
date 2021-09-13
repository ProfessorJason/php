<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>Aula 04 - Exercício 04b</title>
	<link rel="stylesheet" type="text/css" href="css/estilo.css">
</head>
<body>

	<h1>Aula 04 - Exercício 04b</h1>

	<?php include_once 'menu.php'; ?>

	<h3>
		Faça um programa que receba o salário e a quantidade de filhos de um funcionário. Com base no valor do salário e na quantidade de filhos, calcule e mostre qual será o novo valor do salário que esse funcionário receberá, já incluído o valor do auxílio-escola.
	</h3> 

	<p>
		<img src="imagens/tabelaex4.png" width="400px" height="180px">
	</p>

	<form action="ex4.php" method="post">
		
		<p>
			<label>Informe seu salário base:</label><br>
			<input type="number" name="salario" step="0.01" required min="800">
		</p>

		<p>
			<label>Informe quantos filhos em idade escolar você tem:</label><br>
			<input type="number" name="filhos" required min="0">
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

		
		if($salario <= 2300)
		{
			
			if ($filhos <= 2)
			{
				$aux = 50 * $filhos;
			}
			else
			{
				$aux = 70 * $filhos;
			}

		}
		else if ($salario <= 2500)
		{
			if ($fihlos <= 2)
			{
				$aux = 40 * $filhos;
			}
			else
			{
				$aux = 60 * $filhos;
			}
		}
		else
		{
			if ($filhos <= 2)
			{
				$aux = 30 * $filhos;
			}
			else
			{
				$aux = 20 * $filhos;
			}
		}



		$salario_final = $salario + $aux;

		echo "<p>Seu salário base é R\$ $salario, você possui $filhos filho(s), e seu auxílio-escola será de R\$ $aux e seu salário final será de R\$ $salario_final</p>";

	}

	?>

</body>
</html>