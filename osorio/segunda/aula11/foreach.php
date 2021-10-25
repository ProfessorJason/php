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
		O laço de reoetição <i>foreach</i> é utilizado exclusivamente para percorrer <i>arrays</i>. Sua estrutura nos permite acessar tanto os índices quanto os valores dentro de um array, independentemente do tamanho dele.
	</p>

	<p>
		Há duas formas de trabalharmos com o foreach. A primeira delas, mais simples, a cada pasasgem do laço o valor presente na posição atual do array é copiado para a variáel de controle. Assim, podemos, por exemplo, percorrer um array de <b>qualquer tamanho</b> e mostrar todos os seus valores na tela com apenas uma linha códingo dentro das chaves do  foreach.
	</p>

	<h3>Sintaxe da forma mais simples:</h3>

<pre>
foreach ($array as $valor)
{
	< comandos >
}
</pre>

	<p>
		Tomando como exemplo o array $cidades da página <a href="index.php">'Definição Arrays'</a>, vamos usar o foreach simplificado para mostrar todas as cidades armazenadas no array:
	</p>
<pre>
forach ($cidades as $cidade)
{
	echo "$cidade&ltbr&gt";
}
</pre>

	<h3>Sintaxe completa:</h3>

<pre>
foreach ($array as $indice => $valor)
{
	< comandos >
}
</pre>

	<p>
		Na forma mais completa do <i>foreach</i>, a cada passagem do laço, ele copia o índice (numérico ou textual) para a primeira variável de controle ($indice) e o valor armazenado neste índice na segunda variável de controle ($valor). Assim, conseguimos ter acesso as posições do array e a seus valores.
	</p>

	<p>
		Assim,tomando o mesmo exemplo do array $cidades, utilizando esta forma do foreach, poderímos mostrar em qual posição cada cidade está armazenada:
	</p>

<pre>
foreach ($cidades as $indice => $cidade)
{
	"Cidade da posição $indice: $cidade &ltbr>";
}
</pre>

	<p>A saída de dados deste exemplo, seria assim:</p>

<pre>
Cidade da posição 0: Curitiba 
Cidade da posição 1: Florianópolis
Cidade da posição 2: São Paulo
Cidade da posição 3: Salvador
Cidade da posição 4: Natal
</pre>

	<p>
		Esta forma completa do <i>foreach</i> é muito utilizada com array associativos, ou seja, quando nomeamos os índices ao invés de trabalharmos com eles de forma numérica.
	</p>
	
</body>
</html>