<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>Aula 10 - While</title>
	<link rel="stylesheet" type="text/css" href="../css/estilo.css">
</head>
<body>

	<h1>Aula 10 - Laço While - Definição</h1>

	<?php include_once '../menu.php'; ?>

	<p>
		O laço de repetição <i>while</i> (enquanto) possui uma sintaxe mais simples se comparado ao laço <i>for</i>. Em sua estrutura, informamos apenas a <b>condição de execução</b> do laço. Enquanto ela for verdadeira, os comandos especificados pela estrutura serão executados. Quando ela se tornar falsa, o laço é encerrado.
	</p>

	<p>
		Normalmente urtilizamos este laço quando temos o conhecimento da condição de execução para a repetição dos comandos, mas não necessariamente da <i>quantidade</i> de repetições, pois estas podem variar, ao contrário do laço <i>for</i>, que é sempre fixa.
	</p>

	<p>
		Por exemplo: <br>
		Imagine que você precise aumentar o valor de uma variável de 'x' em 'x', mas não sabemos qual é este valor, pois ele será fornecido pelo usuário. Ou ainda, quanto tempo tempo levará para que determinada condição do seu código seja estabelecida.
	</p>

	<p>
		Nestes casos, sabemos apenas a condição de execução dos comandos. Porém, a quantidade de repetições, pode variar.
	</p>

	<h3>Sintaxe:</h3>

	<pre>
while (condição de execução [for verdadeira])
{
  < comandos >
}
	</pre>


</body>
</html>