<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>Aula 10 - Laço While</title>
	<link rel="stylesheet" type="text/css" href="../css/estilo.css">
</head>
<body>

	<h1>Aula 10 - Laço While - Definição</h1>

	<?php include_once '../menu.php'; ?>

	<p>
		O laço <i>while</i> (enquanto) possui uma sintaxe mais simplificada em relação ao laço <i>for</i>. Enquanto no <i>for</i> precisamos saber das 3 etapas do laço (valor inicial do contador, condição de execução e incremento/decremento do contator), no <i>while</i> temos o controle apenas da <b>condição de execução</b>
	</p>

	<p>
		Embora não precisemos indicar em sua declaração como se dará o incremento ou decremento de sua varável de controle, ainda assim, em algum trecho do código, deve haver alguma mudança no valor da variável que está sendo utilizada para os teste da condição de execução.
	</p>

	<p>
		Por exemplo:
		Se a condição de execução do laço é <i>enquanto variável $x for menor que 10</i>, se ela iniciar em 0 mas, em nenhum momento do código, alterarmos o valor de $x, a condição de execução <b>sempre será verdadeira</b> e, com isso, teremos um laço infinito.
	</p>

	<h3>Sintaxe:</h3>

<pre>
while (condição de execução [for verdadeira])
{
  < comandos a serem executados >
}
</pre>




</body>
</html>