<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>Aula 10(b) - Laço Do/While - Home</title>
	<link rel="stylesheet" type="text/css" href="../css/estilo.css">
</head>
<body>

	<h1>Laço Do/While - Definição</h1>

	<?php include_once 'menu.php'; ?>

	<p>
		O laço <i>do/while</i> (faça/enquanto) é similar ao laço <i>while</i>, pois em sua estrutura só informamos a condição de execução do laço.
	</p>

	<p>
		A principal diferença entre eles é que o <i>while</i> testa a condição de execução <b>antes</b> dos comandos serem executados. Assim, se a confição for <b>falsa</b>, estes comandos não serão executados. Já o <i>do/while</i> executa os comandos primeiro, e <b>depois</b> realiza o teste para verificar se continuará, ou não, a executar seus comandos.
	</p>

	<p>
		Devido a esta natureza de "executar antes, testar condição depois", os comandos dentro desta estrutura de repetição serão executados, obrigatoriamente, ao menos uma vez, mesmo que sua condição de execução seja falsa.
	</p>

	<h3>Sintaxe:</h3>

	<p class="code">
		do { <br><br>
		
		<span>< comandos ></span> <br> <br>
		
		} while (condição de execução [for verdadeira]);
		
	</p>


</body>
</html>