<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>Aula 04 - Exercício 03</title>
	<link rel="stylesheet" type="text/css" href="css/estilo.css">
</head>
<body>

	<h1>Aula 04 - Exercício 03</h1>

	<?php include_once 'menu.php'; ?>

	<h3>
		Faça um programa que receba o salário e o tempo (em anos) de serviço de um funcionário. Com base no valor do salário e no tempo e serviço, mostre qual será o valor da gratificação que esse funcionário receberá.
	</h3>

	<form action="ex3.php" method="post">
		
		<p>
			<label>Informe o salário do funcionário:</label><br>
			<input type="number" name="salario" min="900" step="0.01" class="input" required>
		</p>

		<p>
			<label>Informe o tempo de serviço (em anos):</label><br>
			<input type="number" name="tempo" min="1" class="input" required>
		</p>

		<p>
			<button type="submit" name="enviar">Enviar</button>
		</p>

	</form>

	<?php  

	if (isset($_POST['enviar']))
	{
		$salario = $_POST['salario'];
		$tempo   = $_POST['tempo'];

		if ($salario > 1500 && $tempo <= 3)
		{
			$bonus = 200;
		}
		else if ($salario > 1500 && $tempo > 3)
		{
			$bonus = 300;
		}
		else if ($salario <= 1500 && $tempo <= 3)
		{
			$bonus = 230;
		}
		else if ($salario <= 1500 && $tempo <= 6)
		{
			$bonus = 330;
		}
		else 
		{
			$bonus = 350;
		}

		$salario = number_format($salario, "2");
		$bonus = number_format($bonus, "2");

		echo "<p>O funcionário recebe R\$ $salario, trabalha há $tempo ano(s) na empresa, portanto, seu bônus salarial será de R\$ $bonus</p>";

	}


	?>


</body>
</html>