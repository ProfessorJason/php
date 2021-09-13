<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>Aula 03 - Exemplo 2 - GET</title>
	<link rel="stylesheet" type="text/css" href="css/estilo.css">
</head>
<body>

	<h1>Aula 03 - Exemplo 2 - GET</h1>

	<?php include_once 'menu.php'; ?>

	<p>
		Abaixo, um exemplo de formulário utilizando o método de envio GET:
	</p>

	<h2>Preencha seus dados:</h2>

	<form action="exp2.php" method="get">
		
		<p>
			<label>Aluno:</label><br>
			<input type="text" name="aluno" required>
		</p>

		<p>
			<label>Matrícula:</label><br>
			<input type="number" name="matricula" required>
		</p>

		<p>
			<label>Curso:</label><br>
			<input type="text" name="curso" required>
		</p>

		<p>
			<button type="submit" name="enviar">Enviar</button>
		</p>

	</form>

	<?php  

	// verificar s eo botão 'enviar' foi enviado via get
	if (isset($_GET['enviar'])) {

		// armazemar em variáveis locais os dados do formulário
		$aluno 		= $_GET['aluno'];
		$matricula  = $_GET['matricula'];
		$curso 	  	= $_GET['curso'];

		echo "<h3>Dados do aluno:</h3>";
		echo "<p>Nome: $aluno <br>
		Matrícula: $matricula<br>
		Curso: $curso</p>";
	}

	?>

	<p>
		<a href="index.php?origem=exp2.php">Voltar para home</a>
	</p>

</body>
</html>