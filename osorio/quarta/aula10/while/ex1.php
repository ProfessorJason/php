<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>Aula 10 - While - Ex 01</title>
	<link rel="stylesheet" type="text/css" href="../css/estilo.css">
</head>
<body>

	<h1>Laço While - Exemplo 01</h1>

	<?php include_once 'menu.php'; ?>

	<h3>
		Enquanto o valor de 'x' for menor que 'y', faça 'x' receber seu próprio valor + 2. Para tanto, considere que inicialmente 'x' valha 0.3 e 'y' valha 27.4;
	</h3>

	<?php  

	$x = 0.3;
	$y = 27.4;

	while ($x < $y) // aqui, só temos o controle sobre a condição de execução, não da quantidade de execuções
	// a quantidade de execuções está atrelada aos valores iniciais das variáveis x e y
	{
		$x += 2; // $x = $x + 2;
	}

	echo "<h4>Valor de 'x: $x; Valor de 'y': $y</h4>"; 

	?>

</body>
</html>