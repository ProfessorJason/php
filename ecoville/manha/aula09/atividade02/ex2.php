<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>Atividade Prpatica 02 - Ex 02</title>
	<link rel="stylesheet" type="text/css" href="../css/estilo.css">
</head>
<body>

	<h1>Atividade Prpatica 02 - Ex 02</h1>

	<?php  include_once 'menu.php';	?>

	<h4>
		Construa um programa para calcular as raízes de uma equação do 2º grau (ax2 + bx + c). Este cálculo é efetuado com a fórmula de Báskara, sendo que: <br>
		Delta = b² - 4ac; <br>
		Se delta = 0, há duas raízes reais e iguais. <br>
		Se delta > 0, há duas raízes reais e diferentes. <br>
		Se delta < 0, não há raízes reais.
	</h4>

	<form action="ex2.php" method="post">

		<p>
			<label>valor de A:</label><br>
			<input type="number" name="a">
		</p>

		<p>
			<label>Valor de B:</label><br>
			<input type="number" name="b">
		</p>

		<p>
			<label>Valor de C:</label><br>
			<input type="number" name="c">
		</p>

		<p>
			<button type="submit" name="enviar">Enviar</button>
		</p>

	</form>

	<?php 

	if(isset($_POST['enviar']))
	{

		$a = $_POST['a'];
		$b = $_POST['b'];
		$c = $_POST['c'];

		// calculo do delta
		$delta = $b * $b - (4 * $a * $c);

		if ($delta == 0)
		{
			$x = number_format((-$b + sqrt($delta)) / (2*$a), '2');
			echo "<h4>Valor de x: $x</h4>";
		} 
		else if ($delta > 0) 
		{
			$x1 = number_format((-$b + sqrt($delta)) / (2*$a), '2');
			$x2 = number_format((-$b - sqrt($delta)) / (2*$a), '2');
			echo "<h4>Valor de x1: $x1
			Valor de x2: $x2 <br></h4>";
		}
		else
		{
			echo "Não há raizes reais";
		}

	}

	?>

</body>
</html>