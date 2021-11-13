<?php include_once 'database/carros_dao.php'; ?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Aula 15 - Home</title>
</head>
<body>

	<h1>Aula 15 - Home</h1>

	<h2>Cadastro de Carros:</h2>

	<form action="cadastrar.php" method="post">
		
		<p>
			<label>Marca:</label><br>
			<input type="text" name="marca" required>
		</p>

		<p>
			<label>Modelo:</label><br>
			<input type="text" name="modelo" required>
		</p>

		<p>
			<label>Ano:</label><br>
			<input type="number" name="ano" min="1900" 
			max="<?= date('Y')+1; ?>" required>
		</p>

		<p>
			<button type="submit" name="cadastrar">Cadastrar</button>
		</p>

	</form>

	<h3>Carros Cadastrados</h3>

	<?php  

	$result = exibir_carros();

	if (is_object($result))
	{
		while ($carro_atual = mysqli_fetch_assoc($result)) 
		{
		    foreach ($carro_atual as $indice => $valor) 
		    {
		    	// ocultar o id da exibição dos dados do carro
		    	if ($indice != ID)	
		    	{
		    		echo ucfirst($indice) . ": $valor<br>";
		    	}
		    }

		    echo "<br>";
		}
	}


	?>

</body>
</html>