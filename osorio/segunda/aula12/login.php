<?php include_once 'func.php'; ?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>Aula 12 - Login</title>
</head>
<body>

	<h1>Aula 12 - Login</h1>

	<h3>Utilize o formulário abaixo para acessar a <b>área restrita</b></h3>

	<?php  

	/* lembrando:
	!	-	NÃO
	&&	- 	E
	||	- OU
	
	se não estiver vazio o parâmetro enviado via get chamado 'login' */
	if (!empty($_GET['login']))
	{
		echo '<h4>';
		echo validar_dados($_GET['login']);
		echo '</h4>';
	}

	?>

	<form action="validar.php" method="post">

		<p>
			<label>Usuário:</label><br>
			<input type="text" name="usuario">
		</p>

		<p>
			<label>Senha:</label><br>
			<input type="password" name="senha">
		</p>

		<p>
			<button type="submit" name="entrar">Entrar</button>
		</p>

	</form>

	<p>
		<a href="index.php">Voltar para home</a>
	</p>
</body>
</html>