<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>Atividade Prática 02 - Ex 01</title>
	<link rel="stylesheet" type="text/css" href="../css/estilo.css">
</head>
<body>

	<h1>Exercício 01</h1>

	<?php include_once 'menu.php'; ?>

	<h4>
		Tendo como dados de entrada a altura e o sexo de uma pessoa, construa um programa que calcule o seu peso ideal, de acordo com as seguintes fórmulas:<br>
		Para homens: (72.7 x h) – 58 <br>
		Para mulheres: (62.1 x h) – 44.7
	</h4>

	<form action="ex1.php" method="post">

		<p>
			<label>Informe sua altura (em metros):</label><br>
			<input type="number" name="altura" required step="0.01" min="1" max="2.90">
		</p>

		<p>
			<label>Sexo:</label><br>
			<input type="radio" name="sexo" required value="1" checked> Masculino
			<input type="radio" name="sexo" required value="2"> Feminino
		</p>

		<p>
			<button type="submit" name="verificar">Verificar Peso Ideal</button>
		</p>
		
	</form>

	<?php  

	if (isset($_POST['verificar']))
	{
		$altura	= $_POST['altura'];
		$sexo   = $_POST['sexo'];

		/*if ($sexo == 1) // masculino
		{
			$peso = 72.7 * $altura - 58;
		}
		else // feminino
		{
			$peso = 62.1 * $altura - 44.7;
		}*/

		// condicional acima convertida para operador ternário

		$peso = $sexo == 1 ? 72.7 * $altura - 58 : $peso = 62.1 * $altura - 44.7;

		$peso = number_format($peso, '2');

		echo "Seu peso ideal é: $peso Kg";

	}

	?>

</body>
</html>