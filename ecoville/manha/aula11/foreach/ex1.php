<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>Aula 11 - Foreach - Ex1</title>
	<link rel="stylesheet" type="text/css" href="../css/estilo.css">
</head>
<body>

	<h1>Foreach - Exemplo 01</h1>

	<?php include_once '../menu.php'; ?>

	<p>
		Tomando como ponto de partida o exemplo dado na página "definição do laço", vamos criar um array com3 marcas de carro. nossa sintaxe será a seguinte dentro do código PHP: <br>
		<ul style="list-style:none">
			<li>$carros = array("Volvo", "Mitsubishi", "Ford");</li>
		</ul>
	</p>

	<p>
		No exemplo acima, criamos o array 'carros' com 3 valores armazenados dentro deste array. Cada valor está em uma posição (que chamamos de índice). Os ínidices 'padrão' são numéricos e sequenciais, iniciados sempre em 0.
	</p>

	<p>
		Assim, digamos que queremos mostrar cada valor presente em cada posição do array. Neste caso, faríamos isto:
	</p>

	<p class="code">
		echo $carros[0] . "; "; <br>
		echo $carros[1] . "; "; <br>
		echo $carros[2] . "; "; <br>
	</p>

	<p>
		No exemplo acima, estamos mostrando em cada comando echo o valor armazenado no índice especificado pelo valor entre conchetes. Assim, seria feita a seguinte saída de dados: <br>
		<p class="code">
			Volvo; Mitsubishi; Ford;
		</p>
	</p>

	<p>
		Mas, e se tivéssemo 300 carros armazenados ao invés de 3? Acessar índice a índice deste array se tornaria uma tarefa árdua, não? <br>
		Para facilitar nossa vida, vamos utilizar um <i>foreach</i> em sua sintaxe mais básica, (sintaxe 1, apresentada na página de definição do laço). Assim, nosso laço ficaria da seguinte maneira:
	</p>

	<p class="code">
		
		foreach ($carros as $valor) <br>
		{ <br>
			<span>echo $valor . "; ";</span> <br>
		} 

	</p>

	<p>
		No exemplo acima, a cada passagem do laço <i>foreach</i>, ele irá copiar o valor armazenado no índice atual (lembrando que o primeiro índice é 0) para a variável $valor. Na sequência, mostramos o que a variável $valor está armazenando. Ao chegar no fim do laço (fechamento das chaves), o <i>foreach</i> retorna sua execução e verifica se ainda há valores armazenados dentro do array $carros. Se houver, ele acessará o próximo índice, copiarpa o valor armazenado neste índice para a variável $valor e, em seguida, mostramos o valor atualizado da variável $valor.
	</p>

	<p>
		Este processo se repete, até que não hajam mais valores armazenados dentro do array.
	</p>

	<h3>
		A saída de dados abaixo se dará por meio do PHP, utilizando o mesmo array $carros:
	</h3>

	<?php  

	// declaração do array com valores:
	$carros = array("Volvo", "Mitsubishi", "Ford");

	// os valores acima estáo armazenados, respectivamente, nos índices 0, 1 e 2.

	// saída de dados acessando as posições do array diretamente:
	echo "<h4>Mostrando valores de cada posição do array sem <i>foreach</i>:</h4>";
	echo $carros[0] . "; "; // acessando diretamente o valor armazenado no índice 0
	echo $carros[1] . "; "; // acessando diretamente o valor armazenado no índice 1
	echo $carros[2] . "; "; // acessando diretamente o valor armazenado no índice 2

	// saída de dados acessando as posições do array com o foreach:
	echo "<h4>Mostrando valores de cada posição do array com <i>foreach</i>:</h4>";

	foreach ($carros as $valor)
	{
		echo $valor . "; ";
	}

	?>

</body>
</html>