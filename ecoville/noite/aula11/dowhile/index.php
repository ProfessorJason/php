<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>Aula 11 - Do/While - Home</title>
	<link rel="stylesheet" type="text/css" href="../css/estilo.css">
</head>
<body>

	<h1>Aula 11 - Do/While - Definição</h1>

	<?php include_once '../menu.php'; ?>

	<p>
		O laço <i>do/while</i> é semelhante ao laço <i>while</i>. A principal diferença entre os dois, é que este testa se a condição de execução é <b>verdadeira</b> <i>antes</i> de executar os comandos, enquanto aquele executa os comandos primeiro, e testa a condição de execução <i>depois</i>.
	</p>

	<p>
		Por testar a condição de execução após os comandos terem sido executados, o <i>do/while</i> garante que estes comandos serão executados <b><i>ao menos uma vez</i></b>, pois, primeiro ele executa os comandos, e somente depois, ele testa  a condição para efetuar a repetição.
	</p>

	<h3>Sintaxe:</h3>

<pre>
do {

  < comandos >

} while (condição de execução [for verdadeira]);
</pre>

</body>
</html>