<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>Aula 10 - For - Ex 03</title>
	<link rel="stylesheet" type="text/css" href="../css/estilo.css">
</head>
<body>

	<h1>Aula 10 - Laço For - Exemplo 03</h1>

	<?php include_once '../menu.php'; ?>

	<p>
		Fazer uma contagem regressiva de 10 até 0 para o lançamento de um foguete. Para isso, mostrar antes da contagem a frase 'motores ligados', depois mostrar todos os valores da contagem regressiva até chegar zero. Após o fim da contagem, mostrar a frase 'lançar foguete!'.
	</p>

	<h3>Resultado:</h3>

	<?php  

	echo "Motores ligados!<br>";

	for ($cont = 10; $cont >= 0; $cont--) 
	{
		echo "$cont...<br>";
	}

	echo "Lançar foguete!";

	?>


</body>
</html>