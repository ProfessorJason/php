<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>Atividade 02 - Ex 02</title>
	<link rel="stylesheet" type="text/css" href="../css/estilo.css">
</head>
<body>

	<h1>Atividade 02 - Exercício 02</h1>

	<?php include_once 'menu.php'; ?>

	<form action="ex2.php" method="post">

		<p>
			<label>Valor de 'A':</label><br>
			<input type="number" name="a" required>
		</p>

		<p>
			<label>Valor de 'B':</label><br>
			<input type="number" name="b" required>
		</p>

		<p>
			<label>Valor de 'C':</label><br>
			<input type="number" name="c" required>
		</p>

		<p>
			<button type="submit" name="calcular">Calcular</button>
		</p>
		
	</form>

	<?php  

	if(isset($_POST['calcular']))
	{

		$a = $_POST['a'];
		$b = $_POST['b'];
		$c = $_POST['c'];

		// calculo do delta
		$d = $b * $b - 4 * $a * $c;

		// verificar valor do delta
		if ($d == 0)
		{
			$x = (-$b + sqrt($d)) / (2 * $a);
			$x = number_format($x, '1');
			echo "Valor da raiz 'x': $x";
		}
		else if ($d > 0)
		{
			$x1 = (-$b + sqrt($d)) / (2 * $a);
			$x2 = (-$b - sqrt($d)) / (2 * $a);
			$x1 = number_format($x1, '1');
			$x2 = number_format($x2, '1');
			echo "Valor da raiz 'x1': $x1";
			echo "<br>Valor da raiz 'x2': $x2";
		}
		else
		{
			echo "Não há raizes reais, pois o delta é negativo!";
		}

	}

	?>

	

</body>
</html>