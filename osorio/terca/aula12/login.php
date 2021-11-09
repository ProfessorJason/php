<?php include_once 'constantes.php'; include_once 'func.php'; ?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
	<title>Aula 12 - Login</title>
</head>
<body class="container-fluid">

	<h1 class="my-3">Aula 12 - Login</h1>

	<h3>Utilize o formulário abaixo para acessar a página restrita:</h3>

	<?php  
	// verificar se esta página receber um parâmetro enviado via get
	if (!empty($_GET['erro']))
	{
		$msg = verificar_erro($_GET['erro']);

		// verificar se $msg é válida
		if (!empty($msg))
		{
			echo '<h4 class="alert alert-warning" role="alert">';
			echo $msg;
			echo '</h4>';
		}

	}


	?>


	<form action="<?= VALIDAR ?>" method="post">
		<p class="col-3" >
			<label class="form-label">Usuário:
			</label><br>
			<input type="text" name="usuario" class="form-control">
		</p>

		<p class="col-3">
			<label class="form-label">Senha:</label><br>
			<input type="password" name="senha" class="form-control">
		</p>

		<p>
			<button type="submit" name="entrar" class="btn btn-outline-primary">Entrar</button>
		</p>

	</form>

	<p>
		<a href="index.php">Voltar p/ Home</a>
	</p>

</body>
</html>