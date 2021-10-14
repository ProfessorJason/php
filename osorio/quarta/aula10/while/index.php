<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>Aula 10 - While - Home</title>
	<link rel="stylesheet" type="text/css" href="../css/estilo.css">
</head>
<body>

	<h1>Laço While - Definição</h1>

	<?php include_once 'menu.php'; ?>

	<p>
		O laço <i>while</i> (ENQUANTO) é comumente utilizado quando precisamos executar determinados trechos de código por 'x' vezes, porém, não sabemos exatamentes quantas vezes o laço irá executar. <br>
		Porém, sabemos da condição de execução do laço.
	</p>

	<p>
		Por conta disso, sua sintaxe é bastante simples se comparada ao laço <i>for</i>. Porém, temos que ficar atentos ao utilizar este laço para evitarmos criar repetições infinitas.
	</p>

	<p>
		Por exemplo, imagine que enquanto o valor de 'x' for menor que 'y', você precise fazer a seguinte conta:
		<ul>
			<li>'X' receberá seu próprio valor + 2</li>
		</ul>
	</p>

	<p>
		Neste caso, a quantidade de execuções do laço não é conhecida, e dependem também dos valores iniciais das variáveis 'X' e 'Y'
	</p>

	<h3>Sintaxe:</h3>

	<p class="code">
		while (condição [for verdadeira]) <br>
		{ <br>
			<span><- codigos -></span> <br>
		}
	</p>



</body>
</html>