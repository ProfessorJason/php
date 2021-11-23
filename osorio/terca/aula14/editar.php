<?php  // verificar se um id_filme não foi enviado via get
if (!isset($_GET['id_filme']))
{
	// redirecionar o usuário para index.php mandando o parametor msg com um valor acusando erro
	header('location:index.php?msg=idinvalido');
} 
?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Aula 14 - Editar Filme</title>
</head>
<body>

	<?php  

	include_once 'database/filmes.dao.php';

	// manda id do filme recebido via GET para função 'buscar_filme' e guardamos o retorno da função na var $result
	$result = buscar_filme($_GET['id_filme']);

	// verificar o valor de $result
	if (!$result) // mesma coisa que: $result == false
	{
		header('location:index.php?msg=erroeditar');
	}
	else
	{
		// senão retornou false, significa que a função editar_filme RETORNOU um filme válido
		// próximo passo, transformar este retorno (que é um objeto) num array associativo
		$filme = mysqli_fetch_assoc($result);
	}


	?>

	<h1>Aula 14 - Editar Filme</h1>

	<h2>Alterar dados do filme:</h2>

	<p>
		<a href="index.php">Cancelar Edição</a>
	</p>

	<form action="editado.php" method="post">

		<p>
			<label>Título:</label><br>
			<input type="text" name="titulo" required value="<?= $filme['titulo'] ?>">
		</p>

		<p>
			<label>Gênero do filme:</label><br>
			<input type="text" name="genero" required value="<?= $filme['genero'] ?>">
		</p>

		<p>
			<label>Ano de lançamento:</label><br>
			<input type="number" name="ano" min="1900" max="<?= date('Y'); ?>" value="<?= $filme['ano'] ?>">
		</p>

		<input type="hidden" name="id_filme" value="<?= $filme['id_filme'] ?>">

		<p>
			<button type="submit" name="salvar">Salvar Alterações</button>
		</p>
		
	</form>

</body>
</html>