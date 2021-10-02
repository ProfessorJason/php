<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>Atividade 02 - Ex 03</title>
	<link rel="stylesheet" type="text/css" href="../css/estilo.css">
</head>
<body>

	<h1>Atividade 02 - Exercício 03</h1>

	<?php include_once 'menu.php'; ?>

	<form action="ex3.php" method="post">
		
		<p>
			<label>Idade do nadador:</label><br>
			<input type="number" name="idade" required min="0" max="130">
		</p>

		<p>
			<button type="submit" name="verificar">Verificar</button>
		</p>

	</form>

	<?php 

	if(isset($_POST['verificar']))
	{
		$idade = $_POST['idade'];

		// switch case com intervalos
		switch (true){

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

			default: // equivalente ao else
				$cat = "Adulto";
				break;
		}

		echo "Categoria do nadador: $cat";


	}

	?>
	

</body>
</html>