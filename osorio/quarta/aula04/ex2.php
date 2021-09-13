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
			<input type="number" name="salario" min="500" step="0.01"
			placeholder="Ex: R$ 500,23" required>
		</p>

		<p>
			<button name="enviar" type="submit">Enviar</button>
		</p>
		
	</form>

	<?php  

	if (isset($_POST['enviar']))
	{

		$salario = $_POST['salario'];

		if ($salario <= 750)
		{
			// separador decimal no php é o ponto, não a virgula
			// ex: 0,07 precisa ser escrito como 0.07
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

		// formatar valor da variaveç $inss para que contenha apenas 2 casas decimais
		$inss = number_format($inss, "2");
		$salario = number_format($salario, "2");

		echo "<p>O salário do funcionário é <b>R\$ $salario</b>, e o desconto do 
		INSS este mês será de <b>R\$ $inss</b></p>";

	}// fim if 'isset'

	?>


</body>
</html>