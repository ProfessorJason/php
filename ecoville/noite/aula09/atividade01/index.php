<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>Atividade 01 - Home</title>
	<link rel="stylesheet" type="text/css" href="../css/estilo.css">

</head>
<body>

	<h1>Atividade 01 - Home</h1>

	<h2>Cadastro de aparelho eletrônico:</h2>

	<form action="cadastro.php" method="post">
		
		<p>
			<label>Aparelho:</label><br>
			<input type="text" name="aparelho" required>
		</p>

		<p>
			<label>Consumo máximo em watts:</label><br>
			<input type="number" name="consumoMax" required min="1">
		</p>

		<p>
			<label>Quantas horas o aparelho fica ligado por dia?</label><br>
			<input type="number" name="horasDia" required min="0" max="24">
		</p>

		<p>
			<label>Quantos dias o aparelho fica ligado no mês?</label><br>
			<input type="number" name="diasMes" required min="0" max="31">
		</p>

		<p>
			<label>Valor do kilowatt-hora:</label><br>
			<input type="number" name="valorKwh" required min="0" step="0.01">
		</p>

		<p>
			<button type="submit" name="cadastrar">Cadastrar</button>
		</p>

	</form>

</body>
</html>