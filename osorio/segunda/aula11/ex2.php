<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>Aula 11 - Foreach Ex 02</title>
	<link rel="stylesheet" type="text/css" href="css/estilo.css">
</head>
<body>

	<h1>Aula 11 - Foreach - Exemplo 02</h1>

	<?php include_once 'menu.php'; ?>

	<p>
		Crie um array para armazenar o valor de 10 nomes. Utilize a prerrogativa completa do foreach para apresentar estes nomes na tela.
	</p>

	<h3>Resultado:</h3>

	<?php  

	$nomes[] = "Jason";
	$nomes[] = "Manuela";
	$nomes[] = "Meg";
	$nomes[] = "Mimo";
	$nomes[] = "Junior";
	$nomes[] = "Richard";
	$nomes[] = "Daniel";
	$nomes[] = "Teresinha";
	$nomes[] = "Clauri";
	$nomes[] = "Augusto";


	foreach ($nomes as $indice => $nome) 
	{
		echo "Nome na pos $indice: $nome<br>"	;
	}


	?>

</body>
</html>