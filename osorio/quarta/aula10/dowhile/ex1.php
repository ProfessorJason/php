<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>Aula 10(b) - Do/While - Ex 01</title>
	<link rel="stylesheet" type="text/css" href="../css/estilo.css">
</head>
<body>

	<h1>Laço Do/While - Exemplo 01</h1>

	<?php include_once 'menu.php'; ?>

	<h3>
		Faça uma variável 'x' iniciar em 10. Utilize um laço de repetição do/while e, dentro deste laço, execute os seguinte comandos:
		<ul>
			<li>Aumente em +1 o valor de 'x';</li>
			<li>Mostre o valor de 'x' na tela</li>
			<li>A condição de execução do laço será "enquanto 'x' for menor ou igual a 10".</li>
		</ul>
	</h3>

	<h4>Resultado:</h4>

	<?php  

	$x = 10;

	do {

		$x++; // aumentar em 1 unidade o valor da variável

		echo "Valor atual de 'x': $x <br>";

	} while ($x <= 10);

	?>



</body>
</html>