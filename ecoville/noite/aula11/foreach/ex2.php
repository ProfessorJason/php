<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>Aula 11 - Foreach - Ex 02</title>
	<link rel="stylesheet" type="text/css" href="../css/estilo.css">
</head>
<body>

	<h1>Aula 11 - Foreach - Exemplo 02</h1>

	<?php include_once '../menu.php'; ?>

	<p>
		Crie um array "$carros" com 3 posições e faça cada posição receber uma string contendo marca e modelo de carro diferente. Mostre os índices e os valores deste array com a prerrogativa completa do foreach.
	</p>

	<h3>Resultado:</h3>

	<?php  

	// criar o array carros utilizando a maneira 'manual' de declar posições no array
	$carros[] = "Mitsubishi Lancer";
	$carros[] = "Ford New Fiesta";
	$carros[] = "Chevrolet Celta";

	// mostrandp o array com a prerrogativa completa do foreach
	foreach ($carros as $indice => $valor) 
	{
		echo "Posição $indice: $valor<br>";
	}


	?>

</body>
</html>
