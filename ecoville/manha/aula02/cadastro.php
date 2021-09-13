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

	<h2>Cadastro de Dados Pessoais</h2>

	<form action="resposta.php" method="post">
		
		<p>
			<label>Nome:</label> <br>
			<input type="text" name="nome" maxlength="40" required="true" >
		</p>

		<p>
			<label>Idade:</label> <br>
			<input type="number" name="idade" min="18" max="120" required="true">
		</p>

		<p>
			<label>E-mail:</label> <br>
			<input type="email" name="email" required="true">
		</p>

		<p>
			<button type="submit">Enviar</button> 
			<button type="reset">Resetar</button>
		</p>


	</form>

</body>
</html>