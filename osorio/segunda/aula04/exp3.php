<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>Aula 04 - Exemplo 3</title>
	<link rel="stylesheet" type="text/css" href="css/estilo.css">
</head>
<body>

	<h1>Aula 04 - Exemplo 3</h1>

	<?php include_once 'menu.php'; ?>

	<h3>
		Faça um programa que receba o salário e o tempo (em anos) de serviço de um funcionário. Com base no valor do salário e no tempo e serviço, mostre qual será o valor da gratificação que esse funcionário receberá.
	</h3>

	<form action="exp3.php" method="post">
		
		<p>
			<label>Informe o saláro:</label><br>
			<input type="number" name="salario" min="900" step="0.01" required>
		</p>

		<p>
			<label>Tempo de serviço (em anos)</label><br>
			<input type="number" name="tempo" min="1" required>
		</p>

		<p>
			<button type="submit" name="enviar">Enviar</button>
		</p>

	</form>

	<?php  

	if(isset($_POST['enviar']))
	{
		$salario = $_POST['salario'];
		$tempo 	 = $_POST['tempo'];


		// se salário > 1500
		if($salario > 1500)
		{
			// tempo de serviço até 3 anos
			if($tempo <= 3)
			{
				$bonus = 200;
			}
			else // tempo superior a 3 anos
			{
				$bonus = 300;
			}

		}
		else // qualquer valor abaixo de 1500 para o salário
		{
			if($tempo <= 3) // tempo até 3 anos
			{
				$bonus = 230;
			}
			else if ($tempo <= 6) // tempo > 3 e tempo <= 6
			{
				$bonus = 330;
			}
			else // tempo suprior a 6 anos
			{
				$bonus = 350;
			}
		}

		echo "<p>Seu salário é R\$  $salario, seu tempo de empresa é $tempo ano(s), e sua gratificação será de R\$ $bonus.</p>";

	}// if 'principal' ue verifica s eo form foi submetido

	?>

</body>
</html>