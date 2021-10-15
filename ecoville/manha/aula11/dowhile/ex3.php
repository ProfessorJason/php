<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>Aula 11 - Do/While - Ex3</title>
	<link rel="stylesheet" type="text/css" href="../css/estilo.css">
</head>
<body>

	<h1>Do/While - Exemplo 03</h1>

	<?php include_once '../menu.php'; ?>

	<h3>
		Para reoforçar o funcionamento do do/while, em que o laço executa primeiro os seus comandos e <i>depois</i> verifica se a condição de execução é <i>verdadeira</i> para que possa continuar o laço, crie uma variável 'x' com o vlaor inicial de 6; Em seguida, faça um laço do/while que mostre o valor de 'x' enquanto 'x' for menor ou igual a 5. A cada passagem do laço, aumente em 1 o valor de 'x'.
	</h3>

	<h4>Resultado</h4>

	<?php  

	$x = 6;

	do {
		echo "Valor atual de 'x': $x <br>";
		$x++;
	} while ($x <= 5);

	?>

</body>
</html>