<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>Aula 02 - Resposta</title>
	<link rel="stylesheet" type="text/css" href="css/meuestilo.css">
</head>
<body>

	<h1>Aula 02 - Resposta</h1>

	<?php include_once 'menu.php'; ?>

	<h2>Dados Cadastrados</h2>

	<?php 

	// armazenar dados do formulário nas variáveis locais
	$nome  = $_POST['nome'];
	$idade = $_POST['idade'];
	$email = $_POST['email'];

	// comando de saída
	echo "<p>Seu nome é $nome, você tem $idade anos de idade e seu e-mail para contato é $email.</p>";

	?>

</body>
</html>