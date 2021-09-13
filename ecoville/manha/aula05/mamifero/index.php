<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>Aula 05 - Determinar o Mamífero</title>
	<link rel="stylesheet" type="text/css" href="../css/estilo.css">
</head>
<body>

	<h1>Responda as peguntas para determianr qual é o mamífero:</h1>

	<form action="index.php" method="post">

		<p>
			<label>O animal é quadrúpde? </label>
			<select name="pergunta1">
				<option value="1">SIM</option>
				<option value="2">NÃO</option>
			</select>
		</p>

		<p>
			<label>O animal é bípede: </label><br>
			<input type="radio" name="pergunta2" value="1"> SIM 
			<input type="radio" name="pergunta2" value="2"> NÃO
		</p>
		

	</form>

</body>
</html>