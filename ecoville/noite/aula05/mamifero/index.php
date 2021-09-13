<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>Aula 05 - Classificação de Mamíferos</title>
	<link rel="stylesheet" type="text/css" href="../css/estilo.css">
</head>
<body>

	<h1>
		Responda as perguntas abaixo para determinar a classificação do mamífero:
	</h1>

	<form action="index.php" method="post">

		<p>
			<label>O animal é quadrúpde? </label>
			<select name="p1">
				<option value="1">SIM</option>
				<option value="0">NÃO</option>
			</select>
		</p>
		
		<p>
			<label>É bípede?</label>
			<input type="radio" name="p2" value="1" checked> SIM 
			<input type="radio" name="p2" value="0"> NÃO
		</p>


	</form>


</body>
</html>