<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>Aula 03 - Exemplo 02</title>
	<link rel="stylesheet" type="text/css" href="css/estilo.css">
</head>
<body>

	<h1>Aula 03 - Exemplo 02 - GET</h1>

	<?php include_once 'menu.php'; ?>

	<h2>Abaixo, um exemplo de utilização de formulário com o método GET:</h2>

	<form action="exp2.php" method="get">
		
		<h3>Preencha seus dados</h3>

		<p>
			<label>Aluno:</label><br>
			<input type="text" name="aluno" required>
		</p>

		<p>
			<label>Curso:</label><br>
			<input type="text" name="curso" required>
		</p>

		<p>
			<label>Turno:</label><br>
			<input type="text" name="turno" required>
		</p>

		<p>
			<button type="submit" name="enviar">Enviar</button> 
			<button type="reset">Resetar</button>
		</p>

	</form>

	<?php  

	// verificar se o formulário foi submetido via get
	if(isset($_GET['enviar']))
	{
		$aluno = $_GET['aluno'];
		$curso = $_GET['curso'];
		$turno = $_GET['turno'];

		echo "<h3>Dados do aluno:</h3>";
		echo "Nome: $aluno <br>";
		echo "Curso: $curso<br>";
		echo "Turno: $turno";
	}

	?>

	<p>
		<a href="index.php?origem=exp2.php">Voltar para home</a>
	</p>

</body>
</html>