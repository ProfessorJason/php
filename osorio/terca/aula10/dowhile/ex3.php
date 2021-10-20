<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>Aula 10 - Do/While - Ex 03</title>
	<link rel="stylesheet" type="text/css" href="../css/estilo.css">
</head>
<body>

	<h1>Aula 10 - Laço Do/While - Exemplo 03</h1>

	<?php include_once '../menu.php'; ?>

	<p>
		Mostrar todos os valores entre 'min' e 'max'. O valor de 'min' deverá ser gerado aleatoriamente entre 1 e 5. O valor de 'max' deverá ser gerado aleatoriamente entre 5 e 10. Utilize um laço <i>do/while</i> para este exemplo.
	</p>

	<h3>Resultado:s</h3>

	<?php  

	$min = rand(1, 5); // valor minimo aleatório entre 1 e 5
	$max = rand(5, 10); // valor maximo aleatório entre 5 e 10

	$aux = $min; // auxiliar recebe valor minimo (para manter o minimo 'intacto')

	do { // faça

		echo "Valor atual da sequência: $aux <br>";
		$aux++;

	} while ($aux <= $max); // enquanto aux for menor ou igual ao maximo

	?>

</body>
</html>