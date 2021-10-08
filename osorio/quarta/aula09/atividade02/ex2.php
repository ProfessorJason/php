<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>Atividade 02 - Ex 02</title>
	<link rel="stylesheet" type="text/css" href="../css/estilo.css">
</head>
<body>

	<h1>Exercício 02</h1>

	<?php include_once 'menu.php'; ?>

	<h4>
		Construa um programa para calcular as raízes de uma equação do 2º grau (ax2 + bx + c). Este cálculo é efetuado com a fórmula de Báskara: <br>
		<b>-b ± sqrt(delta) / (2a)</b>, onde: <br>
		Delta = b² - 4ac. <br><br>
		Se delta = 0, há duas raízes reais e iguais. <br>
		Se delta > 0, há duas raízes reais e diferentes. <br>
		Se delta < 0, não há raízes reais.
	</h4>

	<form action="ex2.php" method="post">
		
		<p>
			<label>Valor de 'a':</label><br>
			<input type="number" name="a" required>
		</p>

		<p>
			<label>Valor de 'b':</label><br>
			<input type="number" name="b" required>
		</p>


		<p>
			<label>Valor de 'c':</label><br>
			<input type="number" name="c" required>
		</p>

		<p>
			<button type="submit" name="calcular">Calcular</button>
		</p>

	</form>

	<?php  

	if (isset($_POST['calcular']))
	{
		$a = $_POST['a'];
		$b = $_POST['b'];
		$c = $_POST['c'];

		$delta = $b * $b - 4 * $a * $c;
		echo "Delta: $delta <br>";
		// outra maneira de trabalhar com exponenciação:
		// pow(base, exp) ou $b ** exp

		if ($delta == 0)
		{
			$x = (-$b + sqrt($delta)) / (2*$a);
			echo "Raiz x: " . number_format($x, '2') . "<br>"; // exemplo de concatenação
		}
		else if ($delta > 0)
		{
			$x1 = (-$b + sqrt($delta)) / (2*$a);
			echo "Raiz x1: " . number_format($x1, '2') . "<br>";

			$x2 = (-$b - sqrt($delta)) / (2*$a);
			echo "Raiz x2: " . number_format($x2, '2') . "<br>";
		}
		else
		{
			echo "Não há raizes reais (delta negativo)";
		}


	}

	?>


</body>
</html>