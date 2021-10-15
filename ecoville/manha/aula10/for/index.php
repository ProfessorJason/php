<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>Aula 10 - Ex. For - Home</title>
	<link rel="stylesheet" type="text/css" href="../css/estilo.css">
</head>
<body>

	<h1>Aula 10 - Exemplos For - Home</h1>

	<?php include_once 'menu.php'; ?>

	<p>
		Laço <i>for</i> (para) é o mais utilizado na programação. Utilizamos este laço
		quando sabemos quantas vezes os comandos precisam ser executados. <br><br>
		Ex: percorrer todos os valores entre 1 e 50 e mostrar na tela apenas os valores que forem pares. Neste caso, sabemos que devemos executar um laço para 'contar' de 1 até 50, ou seja, iniciando em 1, aumentando a contagem de de 1 em 1, até alcançar o último valor deste intervalo, que neste caos, é 50.
	</p>

	
	<h4>Sintaxe:</h4>
	<p class="code">
	for (início do contador; condição de execução; incremento/decremento do contador) <br>
	{ <br>
		<span><-codigo-></span> <br>
	}
	</pre>

		<br>
		<p>
			Parâmetros:<br>
			<ul>
				<li>início do contador: valor inicial do contador do laço</li>
				<li>condição de execução: enquanto esta condição for verdadeira, o laço será executado</li>
				<li>incremento/decremento do contador: a cada execução do laço, qual será o valor somado ou subtraído ao valor do contador</li>
			</ul>
		</p>

	</p>

</body>
</html>