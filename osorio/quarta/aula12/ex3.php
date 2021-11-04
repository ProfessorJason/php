<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>Aula 12 - Exercício 03</title>
	<link rel="stylesheet" type="text/css" href="css/estilo.css">
</head>
<body>

	<h1>Aula 12 - Exercício 03</h1>

	<?php include_once 'menu.php'; ?>

	<h3>
		João nasceu pesando 2,5 Kg, e seu irmão gêmeo José, 2,7 Kg. Sabendo que os irmãos engordam, respectivamente, 215g e 210g a cada semana, daqui a quantas semanas ambos terão 5kg ou mais?
	</h3>

	<h4>Resultado</h4>

	<?php  

	$joao = 2.5; // peso inicial de joão
	$jose = 2.7; // peso inicial de josé
	$semanas = 0; // semanas decorridas (inicialmente é zero)

	while ($joao <= 5 || $jose <= 5)
	{
		$joao += 0.215; // engordou 215 g
		$jose += 0.210; // engordou 210 g
		
		$semanas++; // passou mais uma semana:
	}

	echo "Peso final de João: $joao<br>";
	echo "Peso final de José: $jose<br>";
	echo "Semanas decorridas: $semanas";


	?>

</body>
</html>