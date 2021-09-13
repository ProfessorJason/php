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

	<h2>Dados Informados:</h2>

	<?php  

	/*
	// declaração das variáveis
	$nome = "Jason Sobreiro"; // string (conj. de caracteres)
	$idade = 34; // valor int (valores numérios não ficam entre aspas)
	$email = "jason.sobreiro@up.edu.br"; */

	// receber os dados do formulário e armazenar nas respectivas variáveis
	$nome = $_POST['nome'];
	$idade = $_POST['idade'];
	$email = $_POST['email'];


	// saída de dados
	echo "Seu nome é $nome, você tem $idade anos, e seu e-mail para contato é $email.";
	// interpolação de dados (var dentro da string)


	?>

</body>
</html>