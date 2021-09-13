<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>Aula 03 - Exercício 03</title>
	<link rel="stylesheet" type="text/css" href="css/estilo.css">
</head>
<body>

	<h1>Aula 03 - Exercício 03</h1>

	<?php include_once 'menu.php'; ?>

	<h2>Informe seu ano de nascimento:</h2>

	<form action="respostas.php" method="post">
		
		<p>
			<label>Ano:</label><br> 
			<input type="number" name="anoNasc" min="1900" 
			max="<?php echo date("Y"); ?>" required>
		</p>

		<p>
			<button type="submit" name="enviarEx3">Enviar</button>
		</p>

	</form>




</body>
</html>