<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>Aula 11 - Arrays - Ex 02</title>
	<link rel="stylesheet" type="text/css" href="../css/estilo.css">
</head>
<body>

	<h1>Aula 11 - Arrays - Exemplo 02</h1>

	<?php include_once '../menu.php'; ?>

	<p>
		Crie 3 variáveis para armazenar nomes de cidades distintas. Em seguida, crie um array $cidades e faça cada posição do array receber o valor de um das variáveis. Mostre na tela o array utilizando o comando de saída padrão.
	</p>

	<h3>Resultado:</h3>

	<?php  

	$cidade1 = "Curitiba";
	$cidade2 = "São Paulo";
	$cidade3 = "Rio de Janeiro";

	// criar um array cidades e atribuir para cada posição do array 
	// uma das cidades acima

	// existem duas maneiras de fazer isso:

	// primeira: os índices são gerados automaticamente:
	// $cidades = array($cidade1, $cidade2, $cidade3);

	// segunda: os índices tbm são gerados automaticamente.
	// porém, se o array já possuir posições válidas, os [] irão
	// criar novas posições no array existente.
	// para evitar criar novas posições, devemos então informar dentro 
	// dos [] qual o índice estamos criando/acessando.
	// ex: $cidades[0] = $cidade1;

	$cidades[] = $cidade1;
	$cidades[] = $cidade2;
	$cidades[] = $cidade3;

	// comente acima a(s) linha(s) que não deseja usar.

	// mostrando o array na tela:
	echo "$cidades[0]<br>";
	echo "$cidades[1]<br>";
	echo "$cidades[2]<br>";

	?>

</body>
</html>
