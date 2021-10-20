<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>Aula 10 - Do/While - Ex 02</title>
	<link rel="stylesheet" type="text/css" href="../css/estilo.css">
</head>
<body>

	<h1>Aula 10 - Laço Do/While - Exemplo 02</h1>

	<?php include_once '../menu.php'; ?>

	<p>
		Crie uma variável 'contador' (pode ser o nome que quiser) iniciando-a com o valor 5. Mostre este valor na tela. Em seguida, crie um laço do/while que irá:
		<ul>
			<li>Aumentar o valor do contador em +3</li>
			<li>Mostrar o valor atual do contador</li>
			<li>Repetir os passos acima enquanto o contador for menor ou igual a 15</li>
		</ul>
	</p>

	<h3>Resultado</h3>

	<?php 

	$bolinho = 5;

	echo "Valor inicial de 'bolinho': $bolinho <br>";

	do {
		
		$bolinho += 3;
		echo "Valor atual da variável 'bolinho': $bolinho <br>";

	} while ($bolinho <= 15);

	?>


</body>
</html>