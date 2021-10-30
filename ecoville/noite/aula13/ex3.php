<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>Aula 13 - Ex 03</title>
	<link rel="stylesheet" type="text/css" href="css/estilo.css">
</head>
<body>

	<h1>Aula 13 - Exercício - Ex 03</h1>

	<?php include_once 'menu.php'; ?>

	<h3>
		João nasceu pesando 2,5 Kg, e seu irmão gêmeo José, 2,7 Kg. Sabendo que os irmãos engordam, respectivamente, 215g e 210g a cada semana, daqui a quantas semanas ambos terão 5kg ou mais?
	</h3>

	<h3>Resultado:</h3>

	<?php  

	$joao = 2.5; // kg
	$jose = 2.7; // kg
	$semanas = 0; // tempo decorrido em semanas

	while ($joao <= 5 || $jose <= 5)
	{
		$joao += 0.215; // $joao = $joao + 0.215;
		$jose += 0.210; 
		$semanas++; // aumentamos 1 semana na contagem
	}

	echo "Peso final de João: $joao kg<br>";
	echo "Peso final de José: $jose kg<br>";
	echo "Temo decorrido = $semanas semanas";

	?>


</body>
</html>	