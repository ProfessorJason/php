<?php  
// verificar se o parametro id_jogo NAO FOI enviado
if (!isset($_GET['id_jogo']))
{
	// retorne à home com msg de erro
	header('location:index.php?msg=id_invalido');
}
else
{
	include_once 'database/jogos.dao.php';

	$result = buscar_jogo($_GET['id_jogo']);

	// verificar se $result é nulo
	if ($result == null)
	{
		// se for true, sinal que não existe jogo com o id informado na tabela jogos_tb
		header('location:index.php?msg=id_invalido');
	}
	else
	{
		// senão for nulo, sinal que existe jogo com o id informado, e este jogo está armazenado na var $result
		// converter este resultado (que é um objeto) em um array associativo
		$jogo = mysqli_fetch_assoc($result);
	}
}

?>

<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Aula 17 (cont 16) - Editar Jogo</title>
</head>
<body>

	<h1>Editar Jogo</h1>

	<p>
		<a href="index.php">[Cancelar Edição]</a>
	</p>

	<form action="editado.php" method="post">
		
		<p>
			<label>Título do jogo:</label><br>
			<input type="text" name="titulo" required value="<?= $jogo['titulo'] ?>">
		</p>

		<p>
			<label>Gênero:</label><br>
			<select name="genero">
				<option selected value="<?= $jogo['genero'] ?>"><?= $jogo['genero'] ?></option>
				<option disabled>----------------</option>
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
			<input type="number" name="ano" min="1970" max="<?= date('Y'); ?>" required value="<?= $jogo['ano'] ?>">
		</p>

		<input type="hidden" name="id_jogo" value="<?= $jogo['id_jogo'] ?>">

		<p>
			<button type="submit" name="salvar">Salvar Alterações</button>
		</p>

	</form>

</body>
</html>