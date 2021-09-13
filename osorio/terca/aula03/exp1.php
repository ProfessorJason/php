<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>Aula 03 - Exemplo 1 - POST</title>
	<link rel="stylesheet" type="text/css" href="css/estilo.css">
</head>
<body>

	<h1>Aula 03 - Exemplo 1 - POST</h1>	

	<?php include_once 'menu.php'; ?>

	<p>
		Abaixo, um exemplo de formulário utilizando o método de envio POST:
	</p>

	<h2>Preencha seus dados:</h2>

	<form action="exp1.php" method="post">
		
		<p>
			<label>Nome:</label><br> 
			<input type="text" name="nome" required>
		</p>

		<p>
			<label>Idade:</label><br> 
			<input type="number" name="idade" required>
		</p>

		<p>
			<label>E-mail:</label><br>
			<input type="email" name="email" required>
		</p>

		<p>
			<button type="submit" name="enviar">Enviar</button>
		</p>

	</form>

	<?php  

	// verificar se o botão 'enviar' foi enviado via método POST
	if (isset($_POST['enviar'])) {

		// armazenar dados digitados no formulário em suas respectivas variáveis
		$nome = $_POST['nome'];
		$idade = $_POST['idade'];
		$email = $_POST['email'];

		// mostrando os valores das variáveis numa interpolação
		echo "<h3>Seu nome é $nome, você tem $idade anos, e seu e-mail para contato é $email</h3>";
	}

	?>

</body>
</html>