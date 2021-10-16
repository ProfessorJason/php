<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>Aula 11 - Foreach - Ex 01</title>
	<link rel="stylesheet" type="text/css" href="../css/estilo.css">
</head>
<body>

	<h1>Aula 11 - Foreach - Exemplo 01</h1>

	<?php include_once '../menu.php'; ?>

	<p>
		Crie um array "$cidades" com 5 posições, e armazene em cada posição o nome de uma cidade qualquer. Mostre este array utilizando a prerrogativa simplificada do foreach.
	</p>

	<h3>Resultado:</h3>

	<?php 

	// criar o array cidades da forma mais simples
	$cidades = array ("Curitiba", "Florianópolis", "São Paulo", "Porto Alegre", "Rio de Janeiro");
	
	// mostrar os valores deste array utilizando o foreach
	foreach ($cidades as $valor) 
	{
		echo "$valor<br>";
	}

	?>

</body>
</html>
