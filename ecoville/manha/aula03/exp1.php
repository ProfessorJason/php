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

	<h2>Exemplo de Formulário com método POST</h2>

	<h3>Preencha seus dados de contato</h3>

	<form action="exp1.php" method="post">
		
		<p>
			<label>Nome:</label><br>
			<input type="text" name="nome" required>
		</p>

		<p>
			<label>E-mail:</label><br>
			<input type="email" name="email" required>
		</p>

		<p>
			<label>Fone:</label><br>
			<input type="phone" name="fone" required>
		</p>

		<p>
			<button type="submit" name="enviar">Enviar</button>
		</p>

	</form>

	<?php  

	// verificar se formulário foi enviado:
	// Se botão 'enviar' foi acionado via POST
	if (isset($_POST['enviar']))
	{
		// armazenar os dados do formulário em variáveis
		$nome = $_POST['nome'];
		$email = $_POST['email'];
		$fone = $_POST['fone'];

		// mostrar valor das variáveis na tela:
		echo "<h4>Dados Cadastrados</h4>";
		echo "Nome: $nome <br>";
		echo "E-mail: $email <br>";
		echo "Fone: $fone";
	}

	?>


</body>
</html>