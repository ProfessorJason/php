<?php include_once 'database/pratos.dao.php'; ?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Aula 14 - Home (CRUD)</title>
</head>
<body>

	<h1>Aula 14 - Home</h1>

	<h2>Utilize o form abaixo para cadastrar um novo prato:</h2>

	<form action="cadastrar.php" method="post">

		<p>
			<label>Nome do prato:</label><br>
			<input type="text" name="nome" required>
		</p>

		<p>
			<label>Tipo de prato:</label><br>
			<input type="radio" name="tipo" value="Salgado" checked> Salgado 
			<input type="radio" name="tipo" value="Doce"> Doce
		</p>

		<p>
			<label>Valor do prato: R$</label><br>
			<input type="number" name="valor" min="1.00" max="999" step="0.01" required>
		</p>

		<p>
			<button type="submit" name="cadastrar">Cadastrar</button>
		</p>
		
	</form>

	<h2>Pratos Cadastrados:</h2>

	<?php 

	$result = exibir_pratos();

	echo $result;

	?>


</body>
</html>