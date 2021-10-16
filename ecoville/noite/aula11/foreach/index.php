<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>Aula 11 - Foreach - Home</title>
	<link rel="stylesheet" type="text/css" href="../css/estilo.css">
</head>
<body>

	<h1>Aula 11 - Foreach - Definição</h1>

	<?php include_once '../menu.php'; ?>

	<p>
		O <i>foreach</i> é um laço de repetição exclusivo para se traalhar com arrays (tanto unidimensional - vetor, quanto multidimensional - matriz).
	</p>

	<p>
		Cada linguagem de programação tem sua assinatura para o <i>foreach</i>. Porém, nem todas as linguagens dão suporte a este tipo de laço. A linguagem <b>C</b>, por exemplo, não tem definição para <i>foreach</i>. Já o nosso querido <b>PHP</b>, possui 2 assinaturas para este tipo de laço;
	</p>

	<p>
		A maneira simplificada, acessa apenas os valores armazenados em cada índice. O <i>foreach</i> consegue determinar o tamanho do array automaticamente, independentemente se ele possui 2 ou 2000 posições válidas. Por conta disso, se torna extremamente fácil sua utilização. Vejamos as daus formas a seguir:
	</p>

	<h3>Sintaxe 1 (simplificada):</h3>

<pre>
foreach ($array as $valor)
{
	< comandos a serem executados > 
}
</pre>

	<p>
		A cada passagem do laço, o 	<i>foreach</i> irá acessar a posição atual (no caso da primeira execução, é a primeira posição, obviamente) e copiar o valor desta posição para a variável '$valor' (lembrando que você pode nomear esta vriável com o nome que prefeir). <br><br>
		Dentro das chaves, podemos, por exemplo, mostrar a variável '$valor' na tela. Assim, a cada passagem do laço, o <i>foreach</i> mostrará o valor da posição atual do array.
	</p>

<h3>Sintaxe 2 (completa):</h3>

<pre>
foreach ($array as $indice => $valor)
{
	< comandos a serem executados >
}
</pre>

	<p>
		Nesta prerorgativa do <i>foreach</i>, a cada passagem do laço, ele irá copiar o índice para a variável '$indice' e o valor associado a este índice para a variável '$valor'. Assim, podemos, por exemplo, mostrar na tela o nome do índice o valor armazeando nesta posição (muito útil para arrays associativos).
	</p>

</body>
</html>