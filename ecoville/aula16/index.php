<?php include_once 'database/jogos.dao.php'; ?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Aula 16 - Home</title>
</head>
<body>

	<h1>Aula 16 - Home</h1>

	<?php  
	if (isset($_GET['msg']))
	{
		include_once 'util.php';
		echo validar_msg($_GET['msg']);
	}

	?>

	<h3>Utilize o form abaixo para cadastrar novos jogos digitais</h3>

	<form action="cadastrar.php" method="post">
		
		<p>
			<label>Título do jogo:</label><br>
			<input type="text" name="titulo" required>
		</p>

		<p>
			<label>Gênero:</label><br>
			<select name="genero">
				<option value="Ação / Aventura" selected>Ação / Aventura</option>
				<option value="RPG">RPG</option>
				<option value="Puzzle">Puzzle</option>
				<option value="Simulador">Simulador</option>
				<option value="Esporte">Esporte</option>
				<option value="Outro">Outro</option>
			</select>
		</p>

		<p>
			<label>Ano que foi lançado:</label><br>
			<input type="number" name="ano" min="1970" max="<?= date('Y'); ?>" required>
		</p>

		<p>
			<button type="submit" name="cadastrar">Cadastrar</button>
		</p>

	</form>

	<h2>Jogos Cadastrados</h2>

	<?php  

	echo exibir_jogos();

	?>


</body>
</html>