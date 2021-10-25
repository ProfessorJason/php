<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>Aula 11 - Home - Arrays e Foreach</title>
	<link rel="stylesheet" type="text/css" href="css/estilo.css">
</head>
<body>

	<h1>Aula 11 - Arrays - Definição</h1>

	<?php include_once 'menu.php'; ?>

	<p>
		<i>Arrays</i> são estruturas de dados que nos permitem armazenar mais de um valor por vez simultaneamente, ao contrário das variáveis comuns que só permitem adicionar e manter um único valor por vez.
	</p>

	<p>
		Para identificar, ou acessar os valores dentro de um <i>array</i>, precisamos informar o índice que estamos acessando. Estes índices (ou posições) são iniciados normalemnte em 0, mas podem ser iniciados com outros valores se for necessário (embora, não seja muito recomendado).
	</p>

	<p>
		Além dos arrays tradicionais com íncides numéricos, o <b>PHP</b> também conta com os chamados <i>arrays associativos</i>, onde damos nomes para os índicies (ex: 'nome', 'idade', 'email'). Este tipo de array é muito últil para trabalharmos com diferentes dados dentro de um mesmo contexto, ex: cadastro de cliente, dados de um carro, dados de um produto, etc.
	</p>

	<h3>Por que utilizar arrays?</h3>

	<p>
		Utilizamos arrays em situações onde criar variáveis distintas se torna um processo inviável, ou que irá acarretar muito mais trabalho. Por ex: <br>
		Imagine que você precise armazenar o nome de 5 cidades do Brasil. Da maneira 'tradicional'você, provavelmente, faria assim:
	</p>
<pre>
$cidade1 = "Curitiba";
$cidade2 = "Florianópolis";
$cidade3 = "São Paulo";
$cidade4 = "Salvador";
$cidade5 = "Natal";
</pre>

	<p>
		Dentro deste contexto, se precisasse mostrar os valores cadastrados na tela, precisaríamos acessar as 5 variáveis, o que nos renderia, 5 comandos de saída distintos, ou um comando único concatenando todas as variáveis. Isso, por si só, já é trabalhoso. Mas agora, imagine que você precise mostrar apenas as cidades que comem com uma letra específica informada pelo usuário numa busca avançada. Ou ainda, precise mostrar apenas as cidades em que a quantidade total de letrass é par.
	</p>

	<p>
		Em qualquer um destes cenários, teríamos que testar todas as variáveis, uma a uma, e nem haveria possibilidade de utilizar um <i>loop</i>, pois as variáveis são todas diferentes.
	</p>

	<p>
		Para tornar nosso processo mais eficiete e reduzir drasticamente o número de linahs de código, neset contexto, poderíamos utilizar um <i>array</i>.
	</p>

	<p>
		Existem várias maneiras de se trabalhar com arrays no <b>PHP</b>. Porém, para aula de hoje, veremos os métodos mais simples.
	</p>

	<h3>Array numérico: primeira forma</h3>

<pre>
$cidades = array("Curitiba", "Florianópolis", "São Paulo", "Salvador", "Natal");
</pre>

	<p>
		Armazenando os dados desta maneira, cada cidade estará armazenada em uma posição do array $cidades, onde o primeiro valor, estará na posição 0, e a partir disso, os índices seguem sequencialmente até o último valor armazeando. Uma grande vantagem do <b>PHP</b> ao se trabalhar com arrays, é que <b>não precisamos</b> informar o tamanho do array, pois o tamanho é dinâmico, ou seja, muda conforme a quatidade de dados armazenados no array.
	</p>

	<h3>Array numérico: segunda forma</h3>

	<p>
		Outra forma de trabalharmos com arrays no <b>PHP</b> é criarmos as posições linha a linha; Embora possa não parecer muito eficiente à primeira vista, em muitas ocasiões isto se faz necessário, como por exemplo, cada valor armazenado num array, é um dado vindo de um campo de formulário.
	</p>

<pre>
$cidades[] = "Curitiba";
$cidades[] = "Florianópolis";
$cidades[] = "São Paulo";
$cidades[] = "Salvador";
$cidades[] = "Natal";
</pre>

	<p>
		Os concletes em branco [], servem para indicar ao <b>PHP</b> que $cidades é um array e que, portanto, cada valor armazenado nele, estará em uma posição distinta, seguirá uma ordem numérica (iniciando automaticamente em 0).
	</p>

	<h3>Acessando os dados de um array</h3>

	<p>
		Normalmente, utilizamos laços de repetição (em especial o foreach) para acessarmos e/ou manipularmos os dados de um array. Porém, exemplos utilizando laços você pode conferir nas outras páginas, pelo menu principal. Por ora, vamos acessar os valores 'manualmente'.
	</p>

	<p>
		Mostrar a cidade na posição 2 do array:
	</p>
<pre>
echo "Cidade na pos 2: $cidades[2]";
</pre>

	<p>
		Mostrar a cidade na 2ª posição do array:
	</p>

<pre>
echo "Cidade na 2ª pos: $cidades[1]";
</pre>

	<p>
		Alterar o valor do índice 3 para 'Rio de Janeiro':
	</p>

<pre>
$cidades[3] = "Rio de Janeiro";
</pre>

	<p>
		Acrescentar uma nova cidade no array: Porto Alegre:
	</p>

<pre>
$cidades[] = "Porto Alegre";
</pre>

</body>
</html>