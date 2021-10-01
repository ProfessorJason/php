<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>Atividade Prpatica 02 - Ex 05</title>
	<link rel="stylesheet" type="text/css" href="../css/estilo.css">
</head>
<body>

	<h1>Atividade Prpatica 02 - Ex 05</h1>

	<?php  include_once 'menu.php';	?>

	<h4>
		Faça um programa que leia dois valores vindos de um formulário representando: o operador e o raio de uma circunferência. <br> 
		Caso o operador seja igual a 1, apresentar a área da circunferência (pi x raio²).<br> 
		Caso o operador seja igual a 2, apresentar o perímetro da circunferência (2 x pi x raio). <br>
		Caso o operador não seja nenhum destes valores, apresentar uma mensagem de erro.
	</h4>

	<form action="ex5.php" method="post">

		<p>
			<label>Valor do raio da circunferência:</label><br>
			<input type="number" name="raio" required step="0.01">
		</p>

		<p>
			<label>Operador</label><br>
			<input type="number" name="operador" required>
		</p>

		<p>
			<button type="submit" name="enviar">Enviar</button>
		</p>

	</form>

	<?php  

	if (isset($_POST['enviar']))
	{

		$raio = $_POST['raio'];
		$op = $_POST['operador'];

		if ($op == 1) 
		{
			$x = 3.14 * ($raio * $raio);
			echo "<h4>Área da circunferência: " . number_format($x, '2') ."</h4>";
		}
		else if ($op == 2)
		{
			$x = 2 * 3.14 * $raio;
			echo "<h4>Perímetro da circunferência: " . number_format($x, '2') ."</h4>";
		}
		else
		{
			echo "<h4>Operador inválido. Cálculo não realizado</h4>";
		}

	}

	?>

</body>
</html>