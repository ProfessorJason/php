<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>Aula 10 - Laço Do/While</title>
	<link rel="stylesheet" type="text/css" href="../css/estilo.css">
</head>
<body>

	<h1>Aula 10 - Laço Do/While - Definição</h1>

	<?php include_once '../menu.php'; ?>

	<p>
		O laço <i>do/while</i> (faça/enqaunto) é similar ao laço <i>while</i>. A principal diferença entre eles é que o laço <i>while</i> realiza o teste de execução <b>antes</b> de executar seus comandos. Já o <i>do/while</i> executa os comandos antes, e verifica se acondição de execução é <b>verdadeira</b> após a execução dos comandos.
	</p>

	<p>
		Devido a sua natureza de "atirar primeiro, perguntar depois" (executar códigos antes, verificar condição depois), o <i>do/while</i> garante que os comandos dentro dele sejam executados, obrigatoriamente, ao menos ua vez.
	</p>

	<h3>Sintaxe:</h3>

<pre>
do {
  < comandos a serem executados >
} while (condição de execução [for verdadeira]);
</pre>

</body>
</html>