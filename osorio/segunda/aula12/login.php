<?php include_once 'func.php'; ?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
	<title>Aula 12 - Login</title>
</head>
<body class="container-fluid">

	<h1>Aula 12 - Login</h1>

	<h3>Utilize o formulário abaixo para acessar a <b>área restrita</b></h3>

	<?php  

	/* lembrando:
	!	-	NÃO
	&&	- 	E
	||	- OU
	
	se não estiver vazio o parâmetro enviado via get chamado 'login' */
	if (!empty($_GET['login']))
	{
		
		$msg = validar_dados($_GET['login']);

		if (!empty($msg))
		{
			echo '<div class="alert alert-danger col-3  role="alert" >';
			echo $msg;
			echo '</div>';
		}
	}

	?>

	<form action="validar.php" method="post">

		
		<div class="col-3 p-2">
			<label>Usuário:</label><br>
			<input type="text" name="usuario" class="form-control">
		</div>


		<div class="col-3 p-2">
			<label>Senha:</label><br>
			<input type="password" name="senha" class="form-control">
		</div>

		<div class="p-2">
			<button type="submit" name="entrar" class="btn btn-outline-primary">Entrar</button>
		</div>

	</form>

	<p class="p-3">
		<a href="index.php">Voltar para home</a>
	</p>
</body>
</html>