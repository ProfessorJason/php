<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>Aula 11 - Foreach Ex 03</title>
	<link rel="stylesheet" type="text/css" href="css/estilo.css">
</head>
<body>

	<h1>Aula 11 - Foreach - Exemplo 03</h1>

	<?php include_once 'menu.php'; ?>

	<p>
		Crie um array associativo para armazenar os dados de um contato: nome, idade, telefone e e-mail. Utilize um foreach para mostrar os índices e valores deste array.
	</p>

	<h3>Resultado:</h3>

	<?php  

	$contato['Nome']  = "Jason Sobreiro";
	$contato['Idade'] = 34;
	$contato['Fone']  = "(41) 3359-9874";
	$contato['E-mail'] = "jason.sobreiro@up.edu.br";

	foreach ($contato as $indice => $valor) 
	{
		echo "$indice: $valor<br>"	;
	}


	?>

</body>
</html>