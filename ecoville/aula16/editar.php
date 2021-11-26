<?php  
if (!isset($_GET['id_jogo']))
{
	header('location:index.php?msg=id_invalido');
}
else
{
	include_once 'database/jogos.dao.php';

	$result = buscar_jogo($_GET['id_jogo']);

	// se o retorno for nulo, sinal que nao existe jogo com este na tabela
	if ($result == null)
	{
		header('location:index.php?msg=id_invalido');
	}
	else
	{
		// senão for nulo, entao o retorno é um objeto contendo todos os dados do jogo
		// converter o objeto retornado em um array associativo
		$jogo = mysqli_fetch_assoc($result);
	}
}
?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Aula 16 - Editar Jogo</title>
</head>
<body>

	<h1>Aula 16 - Editar Jogo</h1>

	<p>
		<a href="index.php">CALCELAR EDIÇÃO</a>
	</p>

	<form action="editado.php" method="post">
		
		<p>
			<label>Título do jogo:</label><br>
			<input type="text" name="titulo" required value="<?= $jogo['titulo'] ?>">
		</p>

		<p>
			<label>Gênero:</label><br>
			<select name="genero">
				<option value="<?= $jogo['genero'] ?>" selected><?= $jogo['genero'] ?></option>
				<option disabled>----------------------</option>
				<option value="Ação / Aventura">Ação / Aventura</option>
				<option value="RPG">RPG</option>
				<option value="Puzzle">Puzzle</option>
				<option value="Simulador">Simulador</option>
				<option value="Esporte">Esporte</option>
				<option value="Outro">Outro</option>
			</select>
		</p>

		<p>
			<label>Ano que foi lançado:</label><br>
			<input type="number" name="ano" min="1970" max="<?= date('Y'); ?>" required 
			value="<?= $jogo['ano'] ?>">
		</p>

		<input type="hidden" name="id_jogo" value="<?= $jogo['id_jogo'] ?>">

		<p>
			<button type="submit" name="salvar">Salvar Alterações</button>
		</p>

	</form>
</body>
</html>