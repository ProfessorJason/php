<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>Aula 10 - For - Ex 01</title>
	<link rel="stylesheet" type="text/css" href="../css/estilo.css">
</head>
<body>

	<h1>Laço For - Exemplo 01</h1>

	<?php include_once 'menu.php'; ?>

	<h3>
		Percorrer o intervalo de valores entre 1 e 50. Cada vez que o programa identificar um valor <i>par</i>, mostrar este valor na tela.
	</h3>

	<h4>Valores pares entre 1 e 50: </h4>

	<?php  

	/*
	$cont = 1; // executado apenas na primeira passagem do laço de repetição
	$cont <= 50; // o teste é realizado em todas as passagens do laço
	$cont++ // executado a partir da segunda execução
	*/
	for ($cont = 1; $cont <= 50; $cont++)
	{
		// verificar se o valor atual do contador é par
		if ($cont % 2 == 0) // se o resto da divisão de $cont por 2 for igual a zero
		{
			echo $cont . "; "; // mostro o valor atual de $cont na tela
		}
	}

	?>

</body>
</html>