<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>Aula 10 - For - Ex 03</title>
	<link rel="stylesheet" type="text/css" href="../css/estilo.css">
</head>
<body>

	<h1>Laço For - Exemplo 03</h1>

	<?php include_once '../menu.php'; ?>

	<p>
		Percorrer o intervalo de <span style="background-color: #ff7f50">valores</span> entre 1 e 100. Mostrar ao final:
		<ul>
			<li>Quantidade de valores pares</li>
			<li>Soma dos valores pares</li>
			<li>Média da soma dos valores pares</li>
		</ul>
	</p>

	<h3>Resultado:</h3>

	<?php 

	$soma = 0; // soma dos valores pares
	$pares = 0; // qtde de valores pares

	for ($cont = 1; $cont <= 100; $cont++)
	{
		if ($cont % 2 == 0)
		{
			$soma += $cont;
			$pares++; // aumentamos em 1 o valor de $pares
		}
	}

	// calculo da média
	$media = $soma / $pares;

	echo "Quantidade dos valores pares: $pares<br>";
	echo "Soma dos valores pares: $soma<br>";
	echo "Média dos valores pares: $media";

	
	?>

</body>
</html>