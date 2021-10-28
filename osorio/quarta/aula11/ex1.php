<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>Aula 11 - Foreach - Ex 01</title>
	<link rel="stylesheet" type="text/css" href="css/estilo.css">
</head>
<body>

	<h1>Laço For - Foreach Exemplo 01</h1>

	<?php include_once 'menu.php'; ?>

	<p>
		Crie um array cidades contendo 5 cidades diferentes em sua declaração. Utilize um foreach simples para percorrer o array e mostrar todas as cidades armazenadas.
	</p>

	<h3>Resultado:</h3>

	<?php  

	$cidades = array ("Curitiba", "São Paulo", "Floripa", "Rio de Janeiro", 
		"Recife");

	foreach ($cidades as $c) 
	{
		echo "$c<br>"	;
	}

	?>

</body>
</html>
