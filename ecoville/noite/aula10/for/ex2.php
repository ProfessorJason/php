<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>Aula 10 - For - Exemplo 02</title>
	<link rel="stylesheet" type="text/css" href="../css/estilo.css">
</head>
<body>

	<h1>Aula 10 - For - Exemplo 02</h1>

	<?php include_once 'menu.php'; ?>

	<h4>
		Mostrar a quantidade de valores ímpares dentro do intervalor entre -10 e 57. Para tanto, utilize o laço <i>for</i>:
	</h4>

	<h3>Resultado:</h3>

	<?php 

	$qtde = 0; // contador de valores ímpares (inicialmente é zero)

	for ($cont = -10; $cont <= 57; $cont++)
	{
		// veriricar se o valor atual do contador é impar:
		if ($cont % 2 != 0)
		{
			$qtde++; // incremento 1 unidade no valor de $qtde
		}

	} // quando a condição de execução for falsa, o programa continuará a
	// execução de qualquer comando que exista abaixo das chaves do fors

	echo "Quantidade de valóres ímpares entre -10 e 57 = $qtde";

	?>

</body>
</html>