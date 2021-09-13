<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>Aula 03 - Ex 1</title>
	<link rel="stylesheet" type="text/css" href="css/estilo.css">
</head>
<body>

	<h1>Exercício 01</h1>

	<?php include_once 'menu.php'; ?>

	<h3>
		Calcular o aumento que será dado a um funcionário, obtendo do usuário as seguintes informações: salário atual e a porcentagem de aumento. Apresentar o novo valor do salário e o valor do aumento.
	</h3>

	<form action="ex1.php" method="post">
		
		<p>
			<label>Salário Atual:</label><br>
			<input type="number" name="salario" step="0.01"
			 min="800" max="20000" required>
		</p>

		<p>
			<label>Porcentagem de aumento salarial:</label><br>
			<input type="number" name="porcentagem" step="0.1" 
			min="1" max="100" required>
		</p>

		<p>
			<button type="submit" name="enviar">Calcular</button>
		</p>

	</form>

	<?php  

	if( isset($_POST['enviar']))
	{
		// entrada de dados
		$salario = $_POST['salario'];
		$porcentagem = $_POST['porcentagem'];

		// processamento
		$aumento = $salario * ($porcentagem/100);
		$salario_final = $salario + $aumento;

		echo "<h4>Seu novo salário é R\$ $salario_final e você teve um aumento de R\$ $aumento</h4>";

	}

	?>

</body>
</html>