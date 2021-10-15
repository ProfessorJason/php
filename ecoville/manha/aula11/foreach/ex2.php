<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>Aula 11 - Foreach - Ex2</title>
	<link rel="stylesheet" type="text/css" href="../css/estilo.css">
</head>
<body>

	<h1>Foreach - Exemplo 02</h1>

	<?php include_once '../menu.php'; ?>

	<p>
		Para este exemplo, vamos criar um array 'cidades' e armazenar algumas cidades dentro dele. Porém, não vamos utilizar a função 'array()', que nos permite criar array já com valores armazenados dentro dele. Vamos armazenar 'manualmente' os nome das cidades em cada posição do array.
	</p>

	<h3>Nosso código então, ficaria assim:</h3>

	<p class="code">
		
		$cidades[] = "Curitiba"; <br>
		$cidades[] = "Maringá"; <br>
		$cidades[] = "Porto Alegre"; <br>
		$cidades[] = "Florianópolis"; <br>
		$cidades[] = "Guaratuba"; <br>
	</p>

	<p>
		Acima, ao criarmos a variável $cidades com o uso de colchetes ao final de seu nome ($cidades[]), estamos indicando que esta variável é, na verdade, um array.
	</p>

	<p>
		Os conchetes em branco servem para que o PHP possa criar índices numéricos de forma automática (porém, o primeiro índice SEMPRE será 0). A cada linha, estamos criando uma nova posição no array e, para esta nova posição, estamos adicionando um valor específico.
	</p>

	<p>
		Caso seja necessário alterar algum valor deste array, precisamos especificar qual a posição iremos alterar. Assim sendo, <i><b>não é possível</b></i> fazermos algo como no exemplo abaixo, pois ali não foi especificada a posição que desejamos acessar/alterar:
	</p>

	<p class="code">
		$cidades = "São Paulo";
	</p>

	<p>
		Para alterarmos alguma cidade para "São Paulo" e outra para "Rio de Janeiro", por exemplo, precisamos identificr qual o índice vamos acessar:
	</p>

	<p class="code">
		$cidades[1] = "São Paulo"; <br>
		$cidades[4] = "Rio de Janeiro";
	</p>

	<h3>A saída de dados abaixo se dará por meio do PHP, utilizando o mesmo array $cidades:</h3>

	<?php  

	// criando array e atribuindo valores 'manualmente' a cada posição
	$cidades[] = "Curitiba";
	$cidades[] = "Maringá";
	$cidades[] = "Porto Alegre";
	$cidades[] = "Florianópolis";
	$cidades[] = "Guaratuba";

	// lembrando que os colchetes em branco garantem que o PHP irá gerenciar os índices
	// de forma automática, iniciando sem 0 e seguindo sequencialmente até a última 
	// posição utilizada.
	// Se o array possui tamanho 5 (5 valores armazenados dentro dele), seus índices
	// serão: 0, 1, 2, 3, 4.

	// alterar valores dentro array, precisamos identificar a posição que desejamos acessar:
	$cidades[1] = "São Paulo";
	$cidades[4] = "Rio de Janeiro";

	// mostrar as cidades utilizndo um foreach:
	echo "<h4>Capitais armazenadas no array:</h4>";
	foreach ($cidades as $valor) 
	{
		echo $valor . "<br>";
	}


	?>

</body>
</html>