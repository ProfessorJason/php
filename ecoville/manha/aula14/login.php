<?php include_once 'func.php' ?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>Aula 14 - Login</title>
</head>
<body>

	<h1>Aula 14 - Login</h1>

	<h3>Utilize o formulário abaixo para acessar a área restrita</h3>

	<?php  

	// se esta página recebeu o parâmetro get 'login'
	if (isset($_GET['login']))
		
		echo "<h4>" . validar_login($_GET['login']) . "</h4>";

	?>

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