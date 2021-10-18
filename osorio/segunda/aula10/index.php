<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>Aula 10 - Laços de Repetição</title>
	<link rel="stylesheet" type="text/css" href="css/estilo.css">
</head>
<body>

	<h1>Aula 10 - Página Principal</h1>

	<h3>Laços de Repetição</h3>

	<p>
		Laços de repetição (também chamados de estruturas de repetição ou <i>loops</i>) são estruturas de código que nos permitem executar determinados comandos repetidas vezes.
	</p>

	<p>
		A quantidade de execuções destes comandos está diretamente relacionada a <b>condição de execução</b> dos laços. Enquanto esta condição for <b>verdadeira</b>, os comandos especificados dentro da estrutura serão executados. Quando esta condição se tornar <b>falsa</b>, o laço deixa de executar os comandos.
	</p>

	<h3>Por que usar laços de repetição?</h3>

	<p>
		Usamos laços de repetição para automatizar processos, uma vez que ele executa códigos repetidas vezes. Assim, imagine que há 100 contatos em uma agenda em que precisamos saber quantos contatos possuem 18 anos ou mais.
	</p>

	<p>
		Neste cenário, <b>sem utilizar</b> laços de repetção, precisaríamos escrever 100 comandos condicionais <i>if</i>, um para cada contato.
	</p>

	<p>
		Os laços de repetição nos permitem reduzir este teste para poucas linhas, onde escreveríamos, basicamente um único condicional, que seria executado 100 vezes. A cada execução, ele iria verificar um contato dos 100 disponíveis na nossa agenda. Cada vez que ele encontrasse um contato com idade >= 18, ele aumentaria o valor de uma variável de controle (um contador, propriamente dito) em 1 unidade.
	</p>

	<p>
		Ao final da execução deste laço, teríamos a quantidade de contatos maiores de idade.
	</p>

	<p>
		Em <b>PHP</b>, temos 4 tipos de laços de repetição: <br>

		<ul>
			<li><a href="for/">FOR (PARA)</a></li>
			<li><a href="while/">WHILE (ENQUANTO)</a></li>
			<li><a href="dowhile/">DO/WHILE (FAÇA/ENQUANTO)</a></li>
			<li>FOREACH (LAÇO PRÓPRIO PARA ARRAYS)</li>
		</ul>
	</p>

</body>
</html>