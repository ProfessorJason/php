<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>Aula 14 - Login</title>
	<link rel="stylesheet" type="text/css" href="css/estilo.css">
</head>
<body>
	<h1>Aula 14 - Login</h1>

	<h3>Utilize o formulário abaixo para acessar a página restrita:</h3>

	<form action="validar.php" method="post">
		
		<p>
			<label for="usuario">Usuário:</label><br>
			<input type="text" name="usuario" id="usuario">
		</p>

		<p>
			<label for="senha">Senha:</label><br>
			<input type="password" name="senha" id="senha">
		</p>

		<p>
			<button type="submit" name="entrar">Entrar</button>
		</p>

	</form>

	<p>
		<a href="index.php">Clique aqui</a> para voltar para home.
	</p>

</body>
</html>