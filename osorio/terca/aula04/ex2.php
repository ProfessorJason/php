<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>Aula 04 - Exercício 02</title>
	<link rel="stylesheet" type="text/css" href="css/estilo.css">
<body>

	<h1>Aula 04 - Exercício 02</h1>

	<?php include_once 'menu.php'; ?>

	<h3>
		Crie um algoritmo que leia o salário de uma pessoa e com base nesse salário, faça o cálculo e imprima o valor do desconto de INSS. Para isso leve em consideração a seguinte tabela:
	</h3>

	<p>
		<img src="imagens/tabelaex2.png" width="40%" height="40%">
	</p>

	<form action="ex2.php" method="post">
		
		<p>
			<label>Informe o salário do funcionário:</label><br>
			<input type="number" name="salario" min="200" step="0.01" required>
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

		// fortando o valor da variavel $inss para conter apenas 
		// 2 casas decimais
		$inss = number_format($inss, "2");

		echo "<p>O salário do funcionário é R\$ $salario, e seu 
		desconto do INSS será de R\$ $inss</p>";

	}// fim do if 'principal'

	?>

</body>
</html>