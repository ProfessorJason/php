<?php // incluir dependências:
include_once 'database/filmes.dao.php'; 
include_once 'func.inc.php';
?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Aula 14 - Home</title>
</head>
<body>

	<h1>Aula 14 - Home</h1>

	<?php 
	// veiricar se esta página recebeu um parâmetro via GET chamado 'msg'
	if (!empty($_GET['msg']))
	{
		// mostrar na tela o retorno da função 'validar_msg' (que por sua vez, 
		// irá receber o argumento'$_GET['msg'])
		echo validar_msg($_GET['msg']);
	}

	?>

	<h2>Cadastre um filme para o catálogo:</h2>

	<form action="cadastrar.php" method="post">

		<p>
			<label>Título:</label><br>
			<input type="text" name="titulo" required>
		</p>

		<p>
			<label>Gênero do filme:</label><br>
			<input type="text" name="genero" required>
		</p>

		<p>
			<label>Ano de lançamento:</label><br>
			<input type="number" name="ano" min="1900" max="<?= date('Y'); ?>">
		</p>

		<p>
			<button type="submit" name="cadastrar">Cadastrar</button>
		</p>
		
	</form>

	<h3>Filmes Cadastrados</h3>

	<?php echo exibir_filmes(); ?>

</body>
</html>