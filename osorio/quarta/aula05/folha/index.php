<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>Aula 05 - Folha de Pagamento</title>
	<link rel="stylesheet" type="text/css" href="../css/estilo.css">
</head>
<body>

	<h1>Aula 05 - Folha de Pagamento</h1>

	<h3>Informe os dados do funcionário:</h3>

	<form action="pagamento.php" method="post">
		
		<p>
			<label>Nome do funcionário:</label><br>
			<input type="text" name="nome" required>
		</p>
		<p>
			<label>Horas trabalhadas no mês:</label><br>
			<input type="number" name="horas" required min="1">
		</p>
		<p>
			<label>Valor da hora de trabalho:</label><br>
			<input type="number" name="valor" required min="10" step="0.01">
		</p>
		<p>
			<button type="submit" name="calcular">Calcular</button>
		</p>

	</form>

</body>
</html>