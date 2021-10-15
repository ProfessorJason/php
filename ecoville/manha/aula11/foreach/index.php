<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>Aula 11 - Foreach - Definição</title>
	<link rel="stylesheet" type="text/css" href="../css/estilo.css">
</head>
<body>

	<h1>Foreach - Definição</h1>

	<?php include_once '../menu.php'; ?>

	<p>
		O laço <i>foreach</i> (para cada) é específico para se trabalhar com <i>arrays</i> no PHP. Existem duas formas básicas de se trabalhar com um <i>foreach</i>.
	</p>

	<h3>Sintaxe 1 (percorre apenas os valores dentro do array):</h3>

	<p class="code">
		
		foreach ($array as $valor) <br>
		{ <br>
			<span><- codigos -></span> <br>
		}

	</p>

	<h3>Sintaxe 2 (percorre índices e valores dentro do array):</h3>

	<p class="code">
		
		foreach ($array as $indice => $valor) <br>
		{ <br>
			<span><- codigos -></span> <br>
		}

	</p>

	<p>
		Porém, antes de entendermos o que são 'indices' e 'valores', precisamos entender o que são <i><b>arrays</b></i>:
	</p>

	<p>
		Um <i>array</i> é uma variável especial que pode armazenar mais de um valor por vez, ao contrário das variáveis comuns que utilizamos na programação. <br>
		Por exemplo, se você precisa armazenar várias marcas de carro, você faria algo provavelmente assim:
		<ul style="list-style:none">
			<li>$carro1 = "Volvo";</li>
			<li>$carro2 = "Mitsubishi";</li>
			<li>$carro3 = "Ford";</li>
		</ul>
	</p>

	<p>
		Porém, se você precisar criar um <i>loop</i> para percorrer. alterar e/ou mostrar todas as marcas de carro que você armazenou, com variáveis simples esta tarefa se torna difícil, pois além do laço de repetição, você precisará utilizar algumas estruturas condicionais (para verificar quais carros foram exibidos e quais ainda restam, por exemplo). Mas e se você precisasse mostrar então, não apenas 3, mas 300 carros?
	</p>

	<p>
		Para essas ocasiões, existe os <i>arrays</i>. Um <i>array</i> pode armazenar quantos valores você precisar em uma única variável. <br>
		Para tanto, cada valor armazenado será identificado por um índice, que pode ser <b>numérico</b> ou um <b>texto</b> (que chamamos de array associativo).
	</p>

	<p>
		Para criarmos um array, de forma tradicional no PHP, nós usamos a função "array()";
		EX:
	</p>

	<p class="code">
		$carros = array();
	</p>

	<p>
		Mais detalhes sobre como trabalhar com arrays e percorrer seus valores, cheque os exemplos no menu acima.
	</p>

</body>
</html>