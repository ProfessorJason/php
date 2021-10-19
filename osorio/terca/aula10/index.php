<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>Aula 10 - Página Principal</title>
	<link rel="stylesheet" type="text/css" href="css/estilo.css">
</head>
<body>

	<h1>10 - Página Principal</h1>

	<h2>Laços de Repetição</h2>

	<p>
		Laços (ou estruturas) de repetição são comandos que nos permitem executar determiando trecho de código repetidas vezes. A quantidade de repetições destes códigos está sujeita a <b>condição de execução</b> do laço. Enquanto a condição de execução for <b>verdadeira</b>, os códigos delimitados pelo laço serão executados. Quando esta condição passar a ser <b>falsa</b>, o programa encerra o <i>loop</i> e prossegue com sua execução normal.
	</p>

	<p>
		Existem no <b>PHP</b> 4 laços de repetição:
		<ul>
			<li><a href="for/">FOR (PARA)</a></li>
			<li><a href="while/">WHILE (ENQUANTO)</a></li>
			<li><a href="dowhile/">DO/WHILE (FAÇA/ENQUANTO)</a></li>
			<li>FOREACH (ESPECIAL PAR ARRAYS)</li>
		</ul>
	</p>

	<h3>Por que utilizar laços de repetição num programa?</h3>

	<p>
		Laços servem para automatizar processos que precisam ser executados repetidas vezes. Por ex: <br>
		Imagine que você precise percorrer todos os valores dentor do intervalo entre 1 e 50 e, ao final, mostrar a soma dos valores pares.
	</p>

	<p>
		Neste caso em específico, é necessário que o programa percorra <i>todos os valores</i> dentro deste intervalo, ou seja, inicie a contagem em 1, e vá de 1 em 1, até chegar em 50. A cada valor, o programa precisará verificar se o valor atual da contagem é par. Se for, dele deverá somar com os outros pares já identificados. Se não for, simplesmente deve ignorar e passar para o próximo valor.
	</p>

	<p>
		Sem utilizar laços de repetição, neste caso, você teria, no mínimo, 50 linhas de código, podendo facilmente ultrapassar este valor se desejar aumentar a complexidade do seu código.
	</p>

	<p>
		Já com o laços de repetição, este processo todo poderá ser reduzido a poucas linhas (num mínimo de 3 linhas!).
	</p>

	<p>
		Para saber mais sobre cada tipo de laço, clique no link correspondente na lista do segundo parágrafo.
	</p>

</body>
</html>