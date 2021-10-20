<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>Aula 10 - Do/While - Definição</title>
	<link rel="stylesheet" type="text/css" href="../css/estilo.css">
</head>
<body>

	<h1>Aula 10 - Laço Do/While - Deifnição</h1>

	<?php include_once '../menu.php'; ?>

	<p>
		O laço de repetição <i>do/while</i> é semelhante ao laço <i>while</i>. A principal diferença entre eles que é que o <i>while</i> testa a condição de repetição <b>antes</b> de executar os comandos programados. Se a condição for <i>falsa</i> desde o ínicio, o laço não executa nenhuma vez. Já o <i>do/while</i>, irá executar os comandos programados, obrigatoriamente, uma vez <i>antes</i> de verificar se a condição de repetição é verdadeira. Se for, ele apenas repete a execução dos comandos. Senão, ele encerra a estrutura de repetição.
	</p>

	<p>
		Basicamente, a estrutura deste laço é o famoso "atira primeiro, pergunta depois", ou seja, ele executa primeiro os comandos, e só então veririca se sua condição de execução é verdadeira para continuar executando os comandos.
	</p>

	<h3>Sintaxe:</h3>

<pre>
do {

  < comandos >
  
} while (condição de execução [for verdadeira]);
</pre>

</body>
</html>