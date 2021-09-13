<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>Aula 02 - Formulário</title>
	<link rel="stylesheet" type="text/css" href="css/meuestilo.css">
</head>
<body>

	<h1>Aula 02 - Formulário</h1>

	<?php include_once 'menu.php'; ?>


	<form action="form.php" method="post">
		
		<h3>Por favor, preencha seus dados:</h3>

		<p>
			<label for="nome">Nome:</label><br>
			<input type="text" name="nome" id="nome" maxlength="60" class="inputs" required>
		</p>

		
		<p>
			<label for="idade">Idade:</label><br>
			<input type="number" name="idade" id="idade" min="18" max="120" required class="inputs">
		</p>

		<p>
			<label for="email">E-mail:</label><br>
			<input type="email" name="email" id="email" required class="inputs">
		</p>

		<p>
			<button type="submit" name="enviar">Enviar</button> 
			<button type="reset">Limpar</button>
		</p>

	</form>

	<?php  

	// verificar SE o botão 'enviar' foi pressionado
	// (OU, em outras palavras, se o formuário foi submetido)

	if(isset($_POST['enviar'])) { // estrutura condicional
		// declaração de variáveis
		$nome  = $_POST['nome'];
		$idade = $_POST['idade'];
		$email = $_POST['email'];

		// comando de saída
		echo "O seu nome é $nome, você tem $idade anos, e seu e-mail para contato é $email";
	}


	?>

</body>
</html>