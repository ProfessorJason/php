<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>Aula 03 - Home</title>
	<link rel="stylesheet" type="text/css" href="css/estilo.css">
</head>
<body>

	<h1>Aula 03 - Home</h1>

	<?php include_once 'menu.php'; ?>

	<p>
		Esta é a página principal. <br>
		Utilize o menu acima para navegação.
	</p>

	<?php 

	// veriricar se esta página recebeu o parâmetro 'origem' via GET
	if (isset($_GET['origem']))
	{
		// se a condição for verdadeira, armazene o valor do parãmetro
		// 'origem' na variável '$origem'
		$origem = $_GET['origem'];
		// mostre valor da variável '$origem' na tela:
		echo "<h4>Você chegou nesta página atráves da $origem</h4>";
	}

	?>

</body>
</html>