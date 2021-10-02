<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>Atividade 02 - Ex 01</title>
	<link rel="stylesheet" type="text/css" href="../css/estilo.css">
</head>
<body>

	<h1>Atividade 02 - Exercício 01</h1>

	<?php include_once 'menu.php'; ?>

	<form action="ex1.php" method="post">
		
		<p>
			<label>Altura (em metros):</label><br>
			<input type="number" name="altura" step="0.01" required min="1">
		</p>

		<p>
			<label>Sexo:</label><br>
			<input type="radio" name="sexo" value="1" checked> Homem 
			<input type="radio" name="sexo" value="2"> Mulher
		</p>

		<p>
			<button type="submit" name="calcular">Calular</button>
		</p>

	</form>

	<?php  

	if (isset($_POST['calcular']))
	{
		$altura = $_POST['altura'];
		$sexo = $_POST['sexo'];

		// operador ternário
		$peso = $sexo == 1 ? (72.7 * $altura) - 58 : (62.1 * $altura) - 44.7;

		echo "Seu peso ideal é: " . number_format($peso, '2') . " Kg";

	}


	?>
	

</body>
</html>