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
		Utilize o menu acima para acessar as demais páginas.
	</p>

	<?php 

	// verificar se o parâmetro 'origem' foi enviado para cá
	if (isset($_GET['origem']))
	{

		// variável 'origem' armazena valor do parâmetro 'origem'
		// lembrando que o parâmetro está visivel na URL
		$origem = $_GET['origem'];
		echo "<h3>Você chegou aqui, vindo da $origem</h3>";
	}


	?>

</body>
</html>