<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>Aula 10 - While - Ex 03</title>
	<link rel="stylesheet" type="text/css" href="../css/estilo.css">
</head>
<body>

	<h1>Aula 10 - While - Exemplo 03</h1>

	<?php include_once 'menu.php'; ?>

	<h4>
		Percorrer um intervalo finito de valores, iniciando em -10 e indo até 'x'. Não sabemos qual será o último valor da sequência ('x'), apenas que pararemos de contar até que tenhamos encontrado 47 números impares. <br>
		Ao final, mostrar o último valor desta sequência.
	</h4>

	<h3>Resultado:</h3>

	<?php  

	$x = -10; // valor inicial é -10, segundo enunciado
	$impares = 0; // quantidade de valores impares encontrados
	// inicialmente, este valor é zero.

	while ($impares < 47)
	{
		// verificar se valor atual de $x é impar
		if ($x % 2 != 0)
		{
			// incrementar o valor de $impares em 1
			$impares++;
		}

		// aumentar o valor de $x
		$x++; 
	}
	
	echo "Último valor da sequência: $x";

	?>

</body>
</html>