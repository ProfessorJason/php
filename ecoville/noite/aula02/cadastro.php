<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>Aula 02 - Cadastro</title>
	<link rel="stylesheet" type="text/css" href="css/meuestilo.css">
</head>
<body>

	<h1>Aula 02 - Cadastro</h1>

	<?php include_once 'menu.php'; ?>

	<h2>Cadastro Pessoal</h2>

	<form action="resposta.php" method="post">
		
		<p>
			<label>Nome:</label><br>
			<input type="text" name="nome" maxlength="40" required>
		</p>

		<p>
			<label>Idade:</label><br>
			<input type="number" name="idade" min="18" max="120" required>
		</p>

		<p>
			<label>E-mail:</label><br>
			<input type="email" name="email" maxlength="40" required>
		</p>

		<p>
			<button type="submit">Enviar</button> 
			<button type="reset">Resetar</button>
		</p>

	</form>

</body>
</html>