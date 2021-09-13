<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>Aula 03 - Exemplo 01</title>
	<link rel="stylesheet" type="text/css" href="css/estilo.css">
</head>
<body>

	<h1>Aula 03 - Exemplo 01 - POST</h1>

	<?php include_once 'menu.php'; ?>

	<h2>Abaixo, um exemplo de utilização de formulário com método POST:</h2>

	<form action="exp1.php" method="post">
		
		<h3>Preencha seus dados para contato:</h3>
		<p>
			<label>Nome:</label><br>
			<input type="text" name="nome" required>
		</p>

		<p>
			<label>E-mail:</label><br>
			<input type="email" name="email" required>
		</p>

		<p>
			<button type="submit" name="enviar">Enviar</button> 
			<button type="reset">Resetar</button>
		</p>

	</form>

	<?php  

	// verificar se o método POST foi enviado
	if (isset($_POST['enviar'])) 
	{ // inicio do bloco if
		// armazenar em variáveis locais os dados do form
		$nome = $_POST['nome']; 
		// canmpo 'nome' enviado via POST está sendo armazenado na variável 'nome'
		$email = $_POST['email'];

		echo "<h3>Seu nome é $nome e seu e-mail cadastrado é $email</h3>";
	}// fim do bloco if
	?>

	<p>
		<a href="index.php?origem=exp1.php">Voltar para home</a>
	</p>

</body>
</html>