<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>Atividade Prática 02 - Ex 05</title>
	<link rel="stylesheet" type="text/css" href="../css/estilo.css">
</head>
<body>

	<h1>Exercício 05</h1>

	<?php include_once 'menu.php'; ?>

	<h4>
		Faça um programa que leia dois valores vindos de um formulário representando: o operador e o raio de uma circunferência. <br> 
		Caso o operador seja igual a 1, apresentar a área da circunferência (π x raio²).<br>Caso o operador seja igual a 2, apresentar o perímetro da circunferência (2 x π x raio). <br> 
		Caso o operador não seja nenhum destes valores, apresentar uma mensagem de erro.
	</h4>

	<form action="ex5.php" method="post">
		
		<p>
			<label>Valor do raio da circunferência:</label><br>
			<input type="number" name="raio" required step="0.1" min="0.1">
		</p>

		<p>
			<label>Operador (1 - Área / 2 - Perímetro):</label><br>
			<input type="number" name="op" required>
		</p>

		<p>
			<button type="submit" name="calcular">Calcular</button>
		</p>

	</form>

	<?php 

	if (isset($_POST['calcular']))
	{
		$raio  = $_POST['raio'];
		$op    = $_POST['op'];

		if ($op == 1)
		{
			$area = 3.14 * ($raio * $raio);
			echo "A área da circunferência = $area";
		}
		else if ($op == 2)
		{
			$perimetro = 2 * 3.14 * $raio;
			echo "O perímetro da circunferência = " . $perimetro;
		}
		else
		{
			echo "Erro: operador inválido!";
		}

	}


	 ?>

</body>
</html>