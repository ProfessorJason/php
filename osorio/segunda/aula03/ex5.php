<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>Aula 03 - Exercício 05</title>
	<link rel="stylesheet" type="text/css" href="css/estilo.css">
</head>
<body>

	<h1>Aula 03 - Exercício 05</h1>

	<?php include_once 'menu.php'; ?>

	<h2>Informe suas 4 notas bimestrais:</h2>

	<form action="respostas.php" method="post">
		
		<p>
			<label>1º Bimestre:</label><br> 
			<input type="number" name="bim1" step="0.1" min="0" max="10" required>
		</p>

		<p>
			<label>2º Bimestre:</label><br> 
			<input type="number" name="bim2" step="0.1" min="0" max="10" required>
		</p>
		<p>
			<label>3º Bimestre:</label><br> 
			<input type="number" name="bim3" step="0.1" min="0" max="10" required>
		</p>

		<p>
			<label>4º Bimestre:</label><br> 
			<input type="number" name="bim4" step="0.1" min="0" max="10" required>
		</p>

		<p>
			<button type="submit" name="enviarEx5">Enviar</button>
		</p>

	</form>

</body>
</html>