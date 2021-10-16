<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>Aula 11 - Arrays - Ex 01</title>
	<link rel="stylesheet" type="text/css" href="../css/estilo.css">
</head>
<body>

	<h1>Aula 11 - Arrays - Exemplo 01</h1>

	<?php include_once '../menu.php'; ?>

	<p>
		Utilizando o exemplo dado na página de definição de arrays, crie um array $carros e armazene nele 5 marcas de carros distintas. Em seguida, apresente os valores deste array utilizando o comando de saída próprio para <i>debug</i> de arrays: <i>print_r</i>. Após isso, altere a marca de carro da segunda posição do array $carros, e mostre apenas essa posição na tela. Por fim, mostre os 5 valores novamente, mas, desta vez, utilizando o comando de saída 'padrão' (echo).
	</p>

	<h3>Resultado:</h3>

	<?php  

	// criar array carros inserijdo 5 valores distintos em sau declaração
	$carros = array("Ford", "Chevrolet", "Volkswagen", "Fiat", "Volvo");

	// próximo passo: mostrar array na tela utilizando o comando print_r
	echo '<pre>';
	print_r($carros);
	echo '</pre>';

	// próximo passo: alterar a marca da segunda posição (índice 1)
	$carros[1] = "Mitsubishi";

	// próximo passo: mostrar a posição alterada na tela
	echo '<br>Segunda posição do array carros ($carros[1]) alterada: ' . 
	$carros[1];

	echo "<p>Mostrando todos os valores do array:</p>";
	echo "$carros[0]<br>";
	echo "$carros[1]<br>";
	echo "$carros[2]<br>";
	echo "$carros[3]<br>";
	echo "$carros[4]<br>";

	?>

</body>
</html>
