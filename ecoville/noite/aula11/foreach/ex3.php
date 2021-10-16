<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>Aula 11 - Foreach - Ex 03</title>
	<link rel="stylesheet" type="text/css" href="../css/estilo.css">
</head>
<body>

	<h1>Aula 11 - Foreach - Exemplo 03</h1>

	<?php include_once '../menu.php'; ?>

	<p>
		Crie um array associativo "$contato" para armazenar o nome, telefone e e-mail de um contato qualquer. Mostre os valores deste array associativo utilizando a prerrogativa completa do foreach:
	</p>

	<h3>Resultado:</h3>

	<?php  

	$contato['Nome']   = "Jason Sobreiro";
	$contato['Fone']   = "(41) 98876-4567";
	$contato['E-mail'] = "jason.sobreiro@up.edu.br";

	// mostrar dados do array com o foreach
	foreach ($contato as $indice => $valor)
	{
		echo "$indice : $valor<br>";
	}

	?>

</body>
</html>
