<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>Aula 04 - Exercício 01</title>
	<link rel="stylesheet" type="text/css" href="css/estilo.css">
</head>
<body>

	<h1>Aula 04 - Exercício 01</h1>

	<?php include_once 'menu.php'; ?>

	<h3>
		Faça um algoritmo que leia o nome de uma pessoa e a sua altura. Leve em consideração que a altura será lida em centímetros, por exemplo 177 e não 1,77. Com base na altura deve ser dada uma mensagem dizendo se a pessoa é de estatura “Baixa”, “Média” ou “Alta”. Para isso considere a seguinte tabela:
	</h3>

	<p>
		<img src="imagens/tabelaex1.png" width="40%" height="40%">
	</p>

	<form action="ex1.php" method="post">
		
		<p>
			<label>Informe seu nome:</label><br>
			<input type="text" name="nome" required>
		</p>

		<p>
			<label>Informe sua altura (em cm):</label><br>
			<input type="number" name="altura" required min="1">
		</p>

		<p>
			<button type="submit" name="enviar">Enviar</button>
		</p>

	</form>

	<?php  

	// verificar se o valor 'enviar' (o nome do botão submit) foi
	// enviado via POST
	if (isset($_POST['enviar']))
	{
		// receber os dados do form e armazena-los em suas respectivas variáveis
		$nome   = $_POST['nome'];
		$altura = $_POST['altura'];

		/* operadores lógicos no PHP
		E 	-	&&
		OU 	-	||
		NÃO -	!
		*/

		if ($altura >= 1 && $altura <= 159)
		{
			$estatura = "baixa";
		}
		else if ($altura >= 160 && $altura <= 172)
		{
			$estatura = "média";
		}
		else
		{
			$estatura = "alta";
		}

		echo "<p>$nome, você tem $altura cm de altura, portanto, sua estatura é 
		$estatura.</p>";

	}

	?>


</body>
</html>