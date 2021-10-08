<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>Atividade 02 - Ex 01</title>
	<link rel="stylesheet" type="text/css" href="../css/estilo.css">
</head>
<body>

	<h1>Exercício 01</h1>

	<?php include_once 'menu.php'; ?>

	<h4>
		Tendo como dados de entrada a altura e o sexo de uma pessoa, construa um programa que calcule o seu peso ideal, de acordo com as seguintes fórmulas: <br>
		Para homens: (72.7 x h) – 58 <br>
		Para mulheres: (62.1 x h) – 44.7

	</h4>

	<form action="ex1.php" method="post">
		
		<p>
			<label>Informe sua altura (em metros):</label><br>
			<input type="number" name="altura" required step="0.01" min="0.5" max="3">
		</p>

		<p>
			<label>Sexo:</label><br>
			<input type="radio" name="sexo" checked value="1"> Masculino
			<input type="radio" name="sexo" value="2"> Feminino
		</p>

		<p>
			<button type="submit" name="verificar">Verificar</button>
		</p>

	</form>

	<?php  

	if (isset($_POST['verificar']))
	{

		$altura	= $_POST['altura'];
		$sexo   = $_POST['sexo'];

		/*if($sexo == 1)
		{
			$peso = 72.7 * $altura - 58;
		}
		else
		{
			$peso = 62.1 * $altura - 44.7;
		}*/

		// operador ternário para simplificar a condicional acima
		// sintaxe: $var = condição ? valor1 : valor2
		// se a condição for verdadeira: valor1 será armazenado em $var
		// senão: valor2 será armazenado em $var
		$peso = $sexo == 1 ? 72.1 * $altura - 58 : 62.1 * $altura - 44.7;


		$peso = number_format($peso, '2');
		echo "Seu peso ideal é $peso kg";

	}

	?>


</body>
</html>