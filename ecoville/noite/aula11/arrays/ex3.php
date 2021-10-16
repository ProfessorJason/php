<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>Aula 11 - Arrays - Ex 03</title>
	<link rel="stylesheet" type="text/css" href="../css/estilo.css">
</head>
<body>

	<h1>Aula 11 - Arrays - Exemplo 03</h1>

	<?php include_once '../menu.php'; ?>

	<p>
		Criar um array associativo 'contato' para armazenar o nome, email e telefone de uma pessoa. Mostrar este array na tela utilizando a saída de debug 'print_r' e, em seguida, a saída padrão 'echo'.
	</p>

	<h3>Resultado:</h3>

	<?php  
	// criando um array associativo de maneira mais prática:

	$contato['Nome'] 	= "João da Silva";
	$contato['Fone'] 	= "(41) 99876-5432";
	$contato['E-mail']	= "joao@dasilva.com";

	echo "Mostrando array com print_r:<br>";

	echo "<pre>";
	print_r($contato);
	echo "</pre>";

	echo "Mostrando array com echo:<br><br>";

	echo "Nome: "  . $contato['Nome']  .  "<br>";
	echo "Fone: "  . $contato['Fone']  .  "<br>";
	echo "E-mail: ". $contato['E-mail']. "<br>";

	?>



</body>
</html>
