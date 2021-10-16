<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>Aula 11 - Arrays - Home</title>
	<link rel="stylesheet" type="text/css" href="../css/estilo.css">
</head>
<body>

	<h1>Aula 11 - Arrays - Definição</h1>

	<?php include_once '../menu.php'; ?>

	<p>
		Um <i>array</i> é uma variável que permite armazenar mais de um valor ao mesmo tempo, ao contrário das variáveis simples que só permitem armazenar um único valor por vez.
	</p>

	<h4>Mas por que utilizar arrays?</h4>

	<p>
		Vamos supor que você precise armazenar 3 marcas distintas de carros. Da maneira convencional, provavelmente você criaria 3 variáveis distintas:
	</p>

<pre>
$carro1 = "Ford";
$carro2 = "Fiat";
$carro3 = "Mitsubishi";
</pre>

	<p>
		Agora, para mostrar estas variáveis na tela, você precisaria mostrá-las individualmente (em um mesmo <i>echo</i>, ou cada variável em um comando de saída próprio):
	</p>

<pre>
echo "$carro1 &ltbr&gt"; <!-- &lt é o simbolo < e &gt é o símbolo > -->
echo "$carro2 &ltbr&gt";
echo "$carro3 &ltbr&gt";
</pre>

	<p>
		Mas e se você precisasse utilizar um <i>loop</i> para percorrer os carros cadastrados e mostrar apenas o segundo carro? <br>
		Ou ainda, se você precisasse mostrar 300 carros cadastrados? <br>
		Nestes cenários, a tarefa se torna difícil, para dizer o mínimo.
	</p>

	<h4>É ai que entram os arrays!</h4>

	<p>
		Dentro deste mesmo exemplo, podemos criar um array "$carros" e armazenar as 3 marcas dentro deste único array. <br>
		Para tanto, utilizaremos a função <i>array()</i> do PHP:
	</p>

<pre>
$carros = array("Ford", "Fiat", "Mitsubishi");
</pre>

	<p>
		No exemplo acima, cada marca de carro foi salva em uma posição específica do array "$carros". Estas posições chamamos de <b>índices</b>. <br>
		No PHP os índices dos arrays podem ser <b>numérios</b> (iniciando, quando de forma automática, em 0), que é o modo padrão; ou <b>textuais</b>, que damos o nome, neste caso, de <i>arrays associativos</i>, pois associamos "nomes" aos índices ao invés de valores numéricos.
	</p>

	<p>
		Na programação <i><b>vetores</b></i> e <i><b>matrizes</b></i> são <i><b>arrays</b></i>. Mas o primeiro chamamos normalmente de <i>arrays unidimensionais</i>, e o segundo, de <i>arrays multidimensionais</i>.
	</p>


</body>
</html>