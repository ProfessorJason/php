<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>Atividade 02 - Ex 03</title>
	<link rel="stylesheet" type="text/css" href="../css/estilo.css">
</head>
<body>

	<h2>Exercício 03</h2>

	<?php include_once 'menu.php'; ?>

	<h4>
		Elabore um programa que, dada a idade de um nadador, classifique-o em uma das seguintes categorias: <br>
		Idade - Categoria <br>
		4 anos ou menos - Sem categoria<br>
		5 a 7 anos - Infantil A<br>
		8 a 10 anos - Infantil B<br>
		11 a 13 anos - Juvenil A<br>
		14 a 17 anos - Juvenil B<br>
		18 anos ou mais Adulto
	</h4>

	<form action="ex3.php" method="post">

		<p>
			<label>Informe a idade do nadador:</label><br>
			<input type="number" name="idade" min="0" max="130" required>
		</p>

		<p>
			<button type="submit" name="verificar">Verificar</button>
		</p>
		
	</form>

	<?php 

	if (isset($_POST['verificar']))
	{
		$idade = $_POST['idade'];

		switch(true) // forced switch
		{

			case $idade <= 4:
			$cat = "Sem categoria";
			break;

			case $idade <= 7:
			$cat = "Infantil A";
			break;

			case $idade <= 10:
			$cat = "Infantil B";
			break;

			case $idade <= 13:
			$cat = "Juvenil A";
			break;

			case $idade <= 17:
			$cat = "Juvenil B";
			break;

			default: // equivalente ao 'else'
			$cat = "Adulto";
			break;
		}

		echo "Categoria do nadador é $cat";


	}

	?>

</body>
</html>