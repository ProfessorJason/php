<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>Aula 02 - Resposta</title>
	<link rel="stylesheet" type="text/css" href="css/meuestilo.css">
</head>
<body>

	<h1>Aula 02 - Resposta</h1>

	<?php include_once 'menu.php'; 

	// armazenar os dados do formulário em variáveis
	$nome  = $_POST['nome'];
	$idade = $_POST['idade'];
	$email = $_POST['email'];

	echo "Seu nome é $nome, você tem $idade anos, e seu e-mail de contato é $email";

	?>

</body>
</html>