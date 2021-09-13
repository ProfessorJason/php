<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>Aula 03 - Exemplo 2</title>
	<link rel="stylesheet" type="text/css" href="css/estilo.css">
</head>
<body>

	<h1>Aula 03 - Exemplo 02 - GET</h1>

	<?php include_once 'menu.php'; ?>

	<h2>Exemplo de Formulário com método GET</h2>

	<h3>Informe os Dados do seu Curso</h3>

	<form action="exp2.php" method="get" required>
		
		<p>
			<label>Curso:</label><br>
			<input type="text" name="curso" required>
		</p>

		<p>
			<label>Turno:</label><br>
			<input type="text" name="turno">
		</p>

		<p>
			<label>Unidade:</label><br>
			<select name="unidade">
				<option value="Osório">Osório</option>
				<option value="Ecoville" selected>Ecoville</option>
				<option value="Santos Andrade">Sts. Andrade</option>
			</select>
		</p>

		<p>
			<button type="submit" name="enviar">Enviar</button>
		</p>

	</form>

	<?php  

	// verificar se o formulário foi enviado
	// SE o botão 'enviar' foi submetido via GET:
	if (isset($_GET['enviar'])) 
	{
		$curso = $_GET['curso'];
		$turno = $_GET['turno'];
		$unidade = $_GET['unidade'];

		echo "<h4>Dados Cadastrados:</h4>";
		echo "Curso: $curso <br>";
		echo "Turno: $turno <br>";
		echo "Unidade: $unidade";
	}

	?>

	<p>
		<a href="index.php?origem=exp2.php">Mandar parâmetro para Index</a>
	</p>

</body>
</html>