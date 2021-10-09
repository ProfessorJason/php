<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>Aula 10 - While - Exemplo 02</title>
	<link rel="stylesheet" type="text/css" href="../css/estilo.css">
</head>
<body>

	<h1>Aula 10 - While - Exemplo 02</h1>

	<?php include_once 'menu.php'; ?>

	<h4>
		Zézinho tem 1,45m de altura, e seu amigo Luizinho tem 1,30m de altura. <br>
		Sabendo que Zézinho cresce 3cm por ano, e Luizinho 5cm, daqui ha quantos anos Luizinho será mais alto que Zézinho?
	</h4>

	<h3>Resultado:</h3>

	<?php  

	$zezinho  = 1.45;
	$luizinho = 1.30;
	$anos = 0;

	while ($zezinho >= $luizinho )
	{
		$zezinho  += 0.03; // 2cm por ano
		$luizinho += 0.05; // 3cm por ano
		$anos++; // aumentou a quantiade de anos decorridos
	}

	echo "Altura atual de Zézinho: $zezinho m<br>";
	echo "Altura atual de Luizinho: $luizinho m <br>";
	echo "Anos necessários para Luizinho ultrapassar Zézinho: $anos";

	?>

</body>
</html>