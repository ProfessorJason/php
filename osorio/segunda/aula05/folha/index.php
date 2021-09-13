<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>Folha de Pagamento</title>
	<link rel="stylesheet" type="text/css" href="../css/estilo.css">
</head>
<body>

	<h1>Folha de Pagamento</h1>

	<p>
		Por favor, preencha dos dados para cálculo da folha de pagamento do funcionário:
	</p>

	<form action="pagamento.php" method="post">
		
		<p>
			<label>Nome:</label><br>
			<input type="text" name="nome" maxlength="50" required>
		</p>

		<p>
			<label>Horas trabalhadas:</label><br>
			<input type="number" name="horas" min="1" required>
		</p>

		<p>
			<label>Valor da hora:</label><br>
			<input type="number" name="valorHora" step="0.01" min="10" required>
		</p>

		<p>
			<button type="submit" name="enviar">Enviar</button>
		</p>


	</form>

</body>
</html>