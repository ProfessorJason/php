<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>Atividade Prpatica 02 - Ex 01</title>
	<link rel="stylesheet" type="text/css" href="../css/estilo.css">
</head>
<body>

	<h1>Atividade Prpatica 02 - Ex 01</h1>

	<?php  include_once 'menu.php';	?>

	<h4>
		Tendo como dados de entrada a altura e o sexo de uma pessoa, construa um programa que calcule o seu peso ideal, de acordo com as seguintes fórmulas: <br> 
		Para homens: (72.7 x h) – 58 <br>
		Para mulheres: (62.1 x h) – 44.7
	</h4>

	<form action="ex1.php" method="post">

		<p>
			<label>Altura (em metros):</label><br>
			<input type="number" name="h" required min="1" max="2.5" step="0.01">
		</p>

		<p>
			<input type="radio" name="s" value="1" checked> Homem 
			<input type="radio" name="s" value="2"> Mulher
		</p>

		<p>
			<button type="submit" name="enviar">Enviar</button>
		</p>
		
	</form>

	<?php  

	if(isset($_POST['enviar']))
	{

		$h = $_POST['h'];
		$s = $_POST['s'];

		// operador ternário
		$peso = $s == 1 ? ((72.7 * $h) - 58) : ((62.1 * $h) - 44.7);

		/*
		Sem o operador ternário:
		if ($peso == 1){
			$peso = (72.7 * $h) - 58;
		} else {
			$peso = (62.4 * $h) - 44.7;
		}

		*/

		$peso = number_format($peso, '2');
		echo "<h4>Seu peso ideal é: $peso";

	}


	?>


</body>
</html>