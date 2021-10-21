<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>Aula 11 - Home</title>
	<link rel="stylesheet" type="text/css" href="css/estilo.css">
</head>
<body>

	<h1>Aula 11 - Arrays - Definição</h1>

	<?php include_once 'menu.php'; ?>

	<p>
		<i>Arrays</i> são variáveis que permitem armazenar mais de um valor por vez dentro de sua estrutura, ao contrário das variáveis comuns, qúe só permitem armazenar um único valor por vez.
		
	</p>

	<p>
		Enquanto podemos imaginar as variáveis comuns como "caixas" onde armazenamos dados de forma individual, os arrays podem ser imaginados como "caixas com repartições", que nos permitem organizar os itens dentro dela, mas ainda assim é uma única estrutura.
	</p>

	<h3>Por que utilizar arrays?</h3>

	<p>
		Imagine que você precise armazenar 10 idades distintas. No modo 'tradicional', você provavelmente iria criar 10 variáveis, onde cada uma delas armazenaria uma idade diferente.
	</p>

	<p class="code">
		$idade1 = 12; <br>
		$idade2 = 33; <br>
		$idade3 = 56; <br>
		... <br>
		$idade10 = 41; 
	</p>

	<p>
		Agora, imagine que você precise verificar quais das 10 idades salvas possem valor >= 18. Se isso for verdadeiro, você deve mostrar na tela a mensagem "Esta pessoa é maior de idade". Novamente, da maneira 'tradicional', o código ficaria +- assim:
	</p>

	<p class="code">
		if ($idade1 >= 18) { echo "Esta pessao é maior de idade ($idade1 anos)"; } <br>
		if ($idade2 >= 18) { echo "Esta pessao é maior de idade ($idade2 anos)"; } <br>
		if ($idade3 >= 18) { echo "Esta pessao é maior de idade ($idade3 anos)"; } <br>
		... <br>
		if ($idade10 >= 18) { echo "Esta pessao é maior de idade ($idade10 anos)"; } <br>
	</p>

	<p>
		Neste exemplo, a tarefa se torna árdua ou, para não dizer 'impossível', se torna certamente inviável. Se já dá trabalho com 10 variáveis, imagine com 100, ou 1000 variáveis?
	</p>

	<p>
		É aí que entram os arrays. <br>
		Há várias maneiras de trabalharmos com arrays em <b>PHP</b>. Na aula de hoje, veremos apenas as mais simples delas.
	</p>

	<p>
		Para declarar um array da forma mais simples, a sintaxe é (utilizando o exemplo de um array chamado 'idades):
	</p>

	<p class="code">
		$idades = array(); 
	</p>

	<p>
		Para armazenar valores dentro deste array, temos duas possibilidades:
	</p>

	<h3>Durante a declaração do array:</h3>

	<p class="code">
		$idades = array(12, 33, 56, 16, 41);
	</p>

	<p>
		No exemplo acima, cada valor inteiro representa uma idade que está sendo armazenada em uma posição distinta do array. Neste caso, a indexação é automática e é iniciada em 0. Então, as posições (ou índices) deste array, seriam: <br>
		0, 1, 2, 3, 4.
	</p>

	<p>
		Uma informação muito importante, é que no <b>PHP</b> nós <b><i>NÃO PRECISAMOS</i></b> declarar o tamanho do array!
	</p>

	<h3>Utilizando [] para indexação automática ou manual:</h3>

	<p class="code">
		$idades[] = 12; <br>
		$idades[] = 33; <br>
		$idades[] = 56; <br>
		$idades[] = 16; <br>
		$idades[] = 41; <br>
	</p>

	<p>
		No modo de declaração de array acima, não precisamos informar que $idades = array(), pois os [] já fazem isso para nós. Manter os [] sem valor numérico dentro, garante a indexição automática, ou seja, o PHP gerencia qual a próxima posição válida para ele criar e armazenar o valor solicitado.
	</p>

	<p>
		Então, no exemplo acima, teríamos os mesmos índices 0, 1, 2, 3, 4.
	</p>

	<h3>Acessando valores de um array</h3>

	<p>
		Depois de armazenados os valores num array, para acessarmos estes valores, precisamos indicar qual posição (índice) iremos acessar, ou utilizar um laço de repetição para automatizar este processo. Veremos a seguir, como fazer isso de maneira 'manual':
	</p>

	<p>
		Printar a idade indicada na posição 2:
		<p class="code">
			echo "Idade na posição 2: $idades[2];"
		</p>
	</p>

	<p>
		Printar a idade indicada na segunda posição:
		<p class="code">
			echo "Idade na 2ª posição: $idades[1];"
		</p>
	</p>

	<p>
		Alterar o valor armazenado na posição 4 para 35.
		<p class="code">
			$idades[4] = 35;
		</p>
	</p>

	<p>
		Verificar se a primeira idade armazeanda é maior ou igual a 18. Se for, dizer que "esta pessoa é maior de idade".
		<p class="code">
			if ($idades[0] >= 18) { echo "Esta pessao é maior de idade"; }
		</p>
	</p>

	<p>
		Mostrar todas as idades na tela sem o uso de laço de repetição:
		<p class="code">
			echo "Idade na posição 0: $idades[0] &ltbr&gt;"; <br>
			echo "Idade na posição 1: $idades[1] &ltbr&gt;"; <br>
			echo "Idade na posição 2: $idades[2] &ltbr&gt;"; <br>
			echo "Idade na posição 3: $idades[3] &ltbr&gt;"; <br>
			echo "Idade na posição 4: $idades[4] &ltbr&gt;"; <br>
		</p>
	</p>

	<p>
		Manipular e acessar dados em um array desta maneira, torna o processo todo tão complicado e custoso quanto trabalhar com várias variáveis simples. Assim, o uso de arrays se torna até mesmo dispensável. Para trabalharmos de forma mais efetiva com arrays, o ideal é utilizarmos faços de repetição (especialmente o <i>for</i> e o <i>foreach</i>).
	</p>

	<p>
		Para ver exemplos de utilização de foreach, acesse os links do menu principal
	</p>

</body>
</html>