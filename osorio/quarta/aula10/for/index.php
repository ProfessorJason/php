<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>Aula 10 - For - Home</title>
	<link rel="stylesheet" type="text/css" href="../css/estilo.css">
</head>
<body>

	<h1>Laço For - Definição</h1>

	<?php include_once 'menu.php'; ?>

	<p>
		O laço <i>for</i> (PARA) é o mais utilizado na programação. Utilizamos este laço de repetição quando sabemos das condições necessárias para que o laço seja executado. a saber: <br> 

		<ul>
			<li>Valor inicial do contador de execuções;</li>
			<li>Condição de execução do laço;</li>
			<li>O valor do incremento/decremento do contador a cada passagem do laço</li>
		</ul>
	</p>

	<p>
		Por exemplo, vamos supor que precisemos mostrar na tela <i>apenas</i> os valores <i>pares</i> dentro do intervalo entre 1 e 50, ou seja, precisamos iniciar a contagem em 1, ir contando de 1 em 1, até chegar em 50. Para cada valor contado, vamos verificar se é par ou não, Se for par, o mostramos na tela, senão, não fazemos nada e prosseguimos com a contagem. <br>
		Se passarmos de 50, não precisamos mais verificar se o valor atual que estamos contando é par ou não.
	</p>

	<p>
		Neste exemplo, sabemos que nosso contador de execução iniciará em 1; que a condição de execução é que o contador seja menor ou igual a 50; e que a cada iteração (passagem do laço) aumentaremos o valor do contador em 1 unidade
	</p>

	<h3>Sintaxe:</h3>

	<p class="code">
		for (valor inicial do cont; condição de exec.; incremento/decremento do cont.) <br>
		{<br>
		<span><- comandos -></span> <br>
		}
	</p>


</body>
</html>