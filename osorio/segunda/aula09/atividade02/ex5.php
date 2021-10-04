<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>Atividade 02 - Ex 05</title>
	<link rel="stylesheet" type="text/css" href="../css/estilo.css">
</head>
<body>

	<h2>Exercício 05</h2>

	<?php include_once 'menu.php'; ?>

	
	<h4>
		Faça um programa que leia dois valores vindos de um formulário representando: o operador e o raio de uma circunferência. <br><br>
		Caso o operador seja igual a 1, apresentar a área da circunferência (π x raio²).<br>
		Caso o operador seja igual a 2, apresentar o perímetro da circunferência (2 x π x raio). <br>
		Caso o indicador não seja nenhum destes valores, apresentar uma mensagem de erro.
	</h4>

	<form action="ex5.php" method="post">
		 
		<p>
			<label>Raio da circunferência:</label><br>
			<input type="number" name="raio" required step="0.01">
		</p>

		<p>
			<label>Operador para cálculo<br>(1 - área; 2 - perímetro):</label><br>
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
	}


	switch($op)
	{
		case 1:
		 	$area = 3.14 * ($raio * $raio);
		 	echo "Área da circunferência de raio $raio = $area";
		break;

		case 2:
		 	$perimetro = 2 * 3.14 * $raio;
		 	echo "Perímero da circunferência de raio $raio = $perimetro";
		break;

		default:
			echo "Operador inválido!";
		break;


	}



	?>


</body>
</html>