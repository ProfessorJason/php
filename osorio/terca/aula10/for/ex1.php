<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>Aula 10 - For - Ex 01</title>
	<link rel="stylesheet" type="text/css" href="../css/estilo.css">
</head>
<body>

	<h1>Aula 10 - Laço For - Exemplo 01</h1>

	<?php include_once '../menu.php'; ?>

	<p>
		Aproveitando o exemplo da página de 'Definição do Laço', crie um programa que percorra todos os valores dentro do intervalo entre 1 e 50, some todos os valores pares, e apresente ao final o valor desta soma. Para tanto, utilize um laço <i>for</i>.
	</p>

	<h3>Resultado:</h3>

	<?php  

	$soma = 0; // inicialmente não somamos nenhum valor par

	// ++ incrementa a variável em 1 unidade:
	for ($cont = 1; $cont <= 50; $cont++)
	{
		// verificar se o valor atual do contador é par
		// Um valor é par quando o resto da divisão dele por 2 for 0
		// O operador matemático que retorna o RESTO de uma divisão é o MOD (sinal de %)
		if ($cont % 2 == 0)
		{
			// somar o valor par atual com o valor que temos ek '$soma'
			$soma += $cont; // mesma coisa: $soma = $soma + $cont;
		}
	} // fim do for

	echo "A soma dos valores pares entre 1 e 50 = $soma";


	?>



</body>
</html>