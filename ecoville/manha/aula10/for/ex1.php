<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>Aula 10 - For - Ex 01</title>
	<link rel="stylesheet" type="text/css" href="../css/estilo.css">
</head>
<body>

	<h1>Aula 10 - For - Exemplo 01</h1>

	<?php include_once 'menu.php'; ?>

	<h4>
		Precisamos mostrar na tela apenas os valores pares dentro de um determiando intervalo. Para este exemplo, vamos considerar o intervalo de números entre 1 e 50. <br><br>Não há necesidade, portanto, de entrada de dados para este exemplo, apenas programar o laço <i>for</i> para executar 50 vezes, e em cada execução, verificarmos se o valor atual do contador é par. Se dor, mostramos este valor na tela. Senão, não fazemos nada e iniciamos a próxima passagem do laço.
	</h4>

	<h3>Resultado:</h3>

	<?php  

	//	OBS: $cont++ é a mesma coisa que: $cont = $cont + 1;
	for ($cont = 1; $cont <= 50; $cont++)
	{
		/*  a cada passagem do laço, o nosos código precisa veriricar
			se o valor atual do contador é par.
			Se for, mostramos ele na tela
		*/

		// operador MOD, no PHP é o %. MOD = pega o resto inteiro de uma divisão
		if ($cont % 2 == 0)
		{
			echo $cont . "<br>";
		}

	}
	// A condição de execução sendo falsa, o laço deixa de ser executado.
	// saindo do laço, o código volta a ser executado normalmente

	?>

</body>
</html>