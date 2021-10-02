<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>Atividade 02 - Ex 05</title>
	<link rel="stylesheet" type="text/css" href="../css/estilo.css">
</head>
<body>

	<h1>Atividade 02 - Exercício 05</h1>

	<?php include_once 'menu.php'; ?>

	<form action="ex5.php" method="post">

		<p>
			<label>Valor do Raio:</label><br>
			<input type="number" name="raio" required min="0.1" step="0.1">
		</p>

		<p>
			<label>Informe o operador (1 ou 2):</label><br>
			<input type="number" name="op" required>
		</p>

		<p>
			<button type="submit" name="calcular">Calcular</button>
		</p>
		
	</form>

	<?php 

	if(isset($_POST['calcular']))
	{
		$raio = $_POST['raio'];
		$op = $_POST['op'];

		if ($op == 1)
		{
			$a = 3.14 * ($raio * $raio);
			echo "A área da circunferência é $a";
		}
		else if ($op == 2)
		{
			$p = 2 * 3.14 * $raio;
			echo "O perímetro da circinferência é $p";
		}
		else
		{
			echo "Operação inválida. Informe 1 para cálculo de área, ou 2 para cálculo de perímetr da circunferência!";
		}


	}


	?>
	

</body>
</html>