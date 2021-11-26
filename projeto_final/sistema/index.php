<?php include_once 'lock.php';
include_once '../database/livro.dao.php'; ?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
	<title>Projeto Final - Area Restrita</title>
</head>
<body class="container-fluid">

	<h1>LivroSystem - Área Restrita</h1>

	<p>
		<a href="logout.php" class="btn btn-primary btn-sm">Sair do sistema</a>
	</p>

	<?php  

	if (isset($_GET['msg']))
	{
		include_once '../util.php';
		echo validar_msg($_GET['msg']);
	}
	?>

	<h3>Cadastrar Livro:</h3>

	<div class="col-5">
		<form action="cadastrar.php" method="post">
			
			<p>
				<label class="form-label">Título</label><br>
				<input type="text" name="titulo" required class="form-control">
			</p>

			<p>
				<label class="form-label">Autor</label><br>
				<input type="text" name="autor" required class="form-control">
			</p>

			<p>
				<label class="form-label">Editora</label><br>
				<input type="text" name="editora" required class="form-control">
			</p>

			<p>
				<button type="submit" name="salvar" class="btn btn-outline-primary">Salvar</button>
			</p>

		</form>
	</div>

	<h2>Livros Cadastrados</h2>

	<?php  

	echo exibir_livros();

	?>

</body>
</html>