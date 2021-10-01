<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>Atividade Prática 01 - Home</title>
	<link rel="stylesheet" type="text/css" href="../css/estilo.css">
</head>
<body>

	<h1>Atividade Prática 01 - Home</h1>

	<h2>Cadastro de aparelho Eletrônico</h2>

	<form action="cadastro.php" method="post">
		
		<p>
			<label>Nome do aparelho:</label><br>
			<input type="text" name="aparelho" required>
		</p>

		<p>
			<label>Consumo máximo em Watts:</label><br>
			<input type="number" name="consumoMax" min="0" required>
		</p>

		<p>
			<label>Nº de horas que o aparelho fica ligado por dia:</label><br>
			<input type="number" name="horasDia" min="0" max="24" required>
		</p>

		<p>
			<label>Nº de dias que o aparelho fica ligado no mês</label><br>
			<input type="number" name="diasMes" min="0" max="31" required>
		</p>

		<p>
			<label>Valor do kilowatt-hora:</label><br>
			<input type="number" name="valorKwh" step="0.01" required>
		</p>

		<p>
			<button type="submit" name="enviar">Enviar</button>
		</p>

	</form>

</body>
</html>