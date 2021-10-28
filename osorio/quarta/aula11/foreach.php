<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>Aula 11 - Foreach</title>
	<link rel="stylesheet" type="text/css" href="css/estilo.css">
</head>
<body>

	<h1>Aula 11 - Foreach - Definição</h1>

	<?php include_once 'menu.php'; ?>

	<p>
		O laço de repetição <i>foreach</i> é utilizado exclusivamente para percorrer <i>arrays</i>. Sua estrutura nos permite acessar tanto os índices quanto os valores dentro de um array, independentemente do tamanho dele.
	</p>

	<p>
		Há duas formas de trabalharmos com o foreach. A primeira delas, mais simples, a cada pasasgem do laço o valor presente na posição atual do array é copiado para a variáel de controle. Assim, podemos, por exemplo, percorrer um array de <b>qualquer tamanho</b> e mostrar todos os seus valores na tela com apenas uma linha códingo dentro das chaves do  foreach.
	</p>

	<h3>Sintaxe da forma mais simples:</h3>

<pre class="code">
foreach ($array as $valor)
{
	< comandos >
}
</pre>

	<p>
		Tomando como exemplo o array $idades da página <a href="index.php">'Definição Arrays'</a>, vamos usar o foreach simplificado para mostrar todas as idades armazenadas no array:
	</p>
<pre class="code">
forach ($idades as $idade)
{
	echo "$idade&ltbr&gt";
}
</pre>

	<h3>Sintaxe completa:</h3>

<pre class="code">
foreach ($array as $indice => $valor)
{
	< comandos >
}
</pre>

	<p>
		Na forma mais completa do <i>foreach</i>, a cada passagem do laço, ele copia o índice (numérico ou textual) para a primeira variável de controle ($indice) e o valor armazenado neste índice na segunda variável de controle ($valor). Assim, conseguimos ter acesso as posições do array e a seus valores.
	</p>

	<p>
		Assim, tomando o mesmo exemplo do array $idades, utilizando esta forma do foreach, poderímos mostrar em qual posição cada cidade está armazenada:
	</p>

<pre class="code">
foreach ($idades as $indice => $idade)
{
	"Idade da posição $indice: $idade &ltbr>";
}
</pre>

	<p>A saída de dados deste exemplo, seria assim:</p>

<pre class="code">
Idade da posição 0: 12
Idade da posição 1: 33
Idade da posição 2: 56
Idade da posição 3: 16
Idade da posição 4: 41
</pre>

	<p>
		Esta forma completa do <i>foreach</i> é muito utilizada com array associativos, ou seja, quando nomeamos os índices ao invés de trabalharmos com eles de forma numérica.
	</p>
	
</body>
</html>