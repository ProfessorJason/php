<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>Aula 10 - For - Ex 01</title>
	<link rel="stylesheet" type="text/css" href="../css/estilo.css">
</head>
<body>

	<h1>Laço For - Exemplo 01</h1>

	<?php include_once '../menu.php'; ?>

	<p>
		Percorrer o intervalo de valores entre 1 e 50. A cada valor, verificar se ele é par. Se for, mostrar este valor na tela, senão, não fazer nada e pular para o próximo valor. Para tanto, utilize o laço <i>for</i>.
	</p>

	<h3>Resultado:</h3>

	<?php  

	// o operador ++ aumenta o valor da variável em 1 unidade

	for ($cont = 1; $cont <= 50 ; $cont++) 
	{
		// verificar se o valor atual do contador é par
		// um número é par quando o resto de sua divisão por 2 for 0
		// % é o operador MOD, que pega justamente o resto de uma divisão
		if ($cont % 2 == 0)
		{
			// se o valor de $cont for par, mostramos ele na tela
			echo "$cont<br>";
		}
	}

	?>

</body>
</html>