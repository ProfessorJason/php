<?php include_once 'constantes.php'; ?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">

	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

	<title>Aula 13 - Login</title>
</head>

<body class="container-fluid">

		<h1 class="my-3">Aula 13 - Login</h1>

	<?php  

	// verificar se a página login recebeu o parâmetro 'erro' enviado via get
	if (!empty($_GET['erro']))
	{
		// verificar possíveis valores do parãmetro 'erro'
		switch($_GET['erro'])
		{
			case 'necessario':

				$msg = '<h4 class="alert alert-warning my-3" role="alert">ATENÇÃO: necessário efetuar o login!</h4>';
				break;

			case 'embranco':

				$msg = '<h4 class="alert alert-warning my-3" role="alert">ATENÇÃO: Preencha todos os dados!</h4>';
				break;

			case 'invalido':

				$msg = '<h4 class="alert alert-warning my-3" role="alert">ATENÇÃO: usuário ou senha incorretos!</h4>';
				break;

			default:

				$msg = '';
				break;
		}

		echo $msg;
	}

	?>

	<form action="<?= VALIDAR; ?>" method="post">
		
		<p>
			<label>Usuário</label>:<br>
			<input type="text" name="usuario">
		</p>

		<p>
			<label>Senha</label>:<br>
			<input type="password" name="senha">
		</p>

		<p>
			<button type="submit" name="entrar" class="btn btn-outline-primary">Entrar</button>
		</p>

	</form>

	<p>
		<a href="index.php">Voltar para Home</a>
	</p>

</body>
</html>