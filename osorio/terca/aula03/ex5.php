<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>Aula 03 - Exercício 05</title>
	<link rel="stylesheet" type="text/css" href="css/estilo.css">
</head>
<body>

	<h1>Aula 03 - Exercício 05</h1>

	<?php include_once 'menu.php'; ?>

	<h3>
		Calcular a média final de um aluno com base nas suas 4 notas bimestrais
	</h3>

	<?php  

	$bim1 = 9.2;
	$bim2 = 3.6;
	$bim3 = 5;
	$bim4 = 6;

	$media = ($bim1 + $bim2 + $bim3 + $bim4) / 4;

	// formatar valor numerico da média
	$media = number_format($media, 1); // setando apenas uma casa decimal para a média

	echo "<h4>Notas Bimestrais:</h4>";
	echo "<p>1º Bim: $bim1<br>";
	echo "2º Bim: $bim2<br>";
	echo "3º Bim: $bim3<br>";
	echo "4º Bim: $bim4</p>";

	echo "<h4>MÉDIA: $media</h4>";

	?>

</body>
</html>