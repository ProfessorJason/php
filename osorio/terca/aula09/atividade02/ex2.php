<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>Atividade Prática 02 - Ex 02</title>
	<link rel="stylesheet" type="text/css" href="../css/estilo.css">
</head>
<body>

	<h1>Exercício 02</h1>

	<?php include_once 'menu.php'; ?>

	<h4>
		Construa um programa para calcular as raízes de uma equação do 2º grau (ax2 + bx + c). Este cálculo é efetuado com a fórmula de Báskara: -b ± sqrt(delta) / 2a; <br>
		Onde: delta = b² - 4ac. <br>
		Se delta = 0, há duas raízes reais e iguais. <br>
		Se delta > 0, há duas raízes reais e diferentes. <br>
		Se delta < 0, não há raízes reais
	</h4>

	<form action="ex2.php" method="post">
		
		<p>
			<label>Valor de 'a':</label><br>
			<input type="number" name="a" required step="0.1">
		</p>

		<p>
			<label>Valor de 'b':</label><br>
			<input type="number" name="b" required step="0.1">
		</p>

		<p>
			<label>Valor de 'c':</label><br>
			<input type="number" name="c" required step="0.1">
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

		// calculo do delta
		$delta = $b * $b - 4 * $a * $c; // função para porenciação: pow(base, exp);

		echo "Valor do delta: $delta<br>";

		if ($delta == 0)
		{
			$x = (-$b + sqrt($delta)) / (2 * $a);
			$x = number_format($x, '2');
			echo "Raiz x: $x";
		}
		else if ($delta > 0)
		{
			$x1 = (-$b + sqrt($delta)) / (2 * $a);
			$x2 = (-$b - sqrt($delta)) / (2 * $a);

			$x1 = number_format($x1, '2');
			$x2 = number_format($x2, '2');

			echo "Raiz x1: $x1<br>";			
			echo "Raiz x2: $x2";
		}
		else
		{
			echo "Não há raizes reais (delta negativo)";
		}


	}

	?>




</body>
</html>