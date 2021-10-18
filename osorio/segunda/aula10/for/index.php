<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>Aula 10 - Laço For</title>
	<link rel="stylesheet" type="text/css" href="../css/estilo.css">
</head>
<body>

	<h1>Aula 10 - Laço For - Definição</h1>

	<?php include_once '../menu.php'; ?>

	<p>
		O laço de repetição <i>for</i> é o mais utilizado, de forma geral, na programação. Sua estrutura nos permite conhecer as 3 etapas de execução de um laço:
		<ul>
			<li>Valor incicial da variável de controle</li>
			<li>Condição de execução do laço</li>
			<li>Incremento/decremento da variável de controle</li>
		</ul>
	</p>

	<p>
		O laço <i>for</i> é composto, justamente, por estas 3 etapas em sua sintaxe. Justamente por isso ele acaba sendo utilizado com mais frequência que os demais, pois nos permite executar praticamente qualquer ação de <i>loop</i> num sistema.
	</p>

	<h3>Sintaxe:</h3>

<pre>
for (valor inicial do contador; condição de execução; incremento/decremento do contador)
{
	< comandos a serem executados >
}
</pre>

	<p>
		O contador (ou variável de controle) é inciiado na primeira execução do laço. A condição de execução é testada todas as vezes, desde a primeira execução. Por fim, o incremento/decremento do contador, ocorre sempre <i>antes</i> da próxima execução do laço (ou seja, a partir da segund aexecução).
	</p>

</body>
</html>