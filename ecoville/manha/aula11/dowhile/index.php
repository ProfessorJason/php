<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>Aula 11 - Do/While</title>
	<link rel="stylesheet" type="text/css" href="../css/estilo.css">
</head>
<body>

	<h1>Aula 11 - Do/While - Definição</h1>

	<?php include_once '../menu.php'; ?>

	<p>
		O laço de repetição <i>do / while</i> é utilizado quando precisamos que os códigos delimitados por ele sejam executados <b>ao menos uma vez</b>.
	</p>

	<p>
		Mesmo que sua condição de execução seja <i>falsa</i> desde a primeira vez que o laço é executado, seus comandos serão executados <b>obrigatoriamente</b> uma primeira vez, só então, a estrutura verifica se a condição de execução é <i>verdadeira</i> ou <i>falsa</i>. 
	</p>

	<p>
		Se ainda for <i>verdadeira</i>, uma nova execução se inicia. Senão, o laço é encerrado.
	</p>

	<h3>Sintaxe:</h3>

	<p class="code">
		do { <br><br>
		<span><- códigos -></span> <br><br>
		} while (condição de execução);
	</p>

</body>
</html>