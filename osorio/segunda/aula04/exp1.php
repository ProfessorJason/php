<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>Aula 04 - Exemplo 1</title>
	<link rel="stylesheet" type="text/css" href="css/estilo.css">
</head>
<body>

	<h1>Aula 04 - Exemplo 1</h1>

	<?php include_once 'menu.php'; ?>

	<h3>
		Faça um algoritmo que leia o nome de uma pessoa e a sua altura. Leve em
consideração que a altura será lida em centímetros, por exemplo 177 e não 1,77.
Com base na altura deve ser dada uma mensagem dizendo se a pessoa é de
estatura “Baixa”, “Média” ou “Alta”.
	</h3>


	<form action="exp1.php" method="post">
		
		<p>
			<label>Nome:</label><br>
			<input type="text" name="nome" required>
		</p>

		<p>
			<label>Altura (em cm):</label><br>
			<input type="number" name="altura" required min="1">
		</p>

		<p>
			<button type="submit" name="enviar">Enviar</button>
		</p>

	</form>

	<?php  

	// verificar se o botão 'enviar foi acionado via POST
	if (isset($_POST['enviar']))
	{ // inicio IF 'enviar'

		$nome = $_POST['nome'];
		$altura = $_POST['altura'];

		// verificar a altura da pessoa
		// SE altura for maior ou igual a 1 E altura for menor ou igual a 159
		// EM ALG: SE (altura >= 1 E altura <= 159) ENTAO

		if ($altura >= 1 && $altura <= 159)
		{
			$estatura = "baixa";
		} // SENÃO SE (altura >= 160 E altura <= 172) ENTAO
		else if ($altura >= 160 && $altura <= 172)
		{
			$estatura = "média";
		}
		else 
		{
			$estatura = "alta";
		}

		// saída de dados (resposta)
		echo "<p>$nome, sua estatura é $estatura.</p>";


	}// fim if 'enviar'


	?>

</body>
</html>