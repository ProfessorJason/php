<?php include_once 'database/contato_dao.php'; include_once 'validar_msg.php';?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Aula 15 - Home</title>
</head>
<body>

	<h1>Aula 15 - Home</h1>

	<h2>Cadastre um contato:</h2>

	<form action="cadastrar.php" method="post">
		
		<p>
			<label>Nome:</label><br>
			<input type="text" name="nome">
		</p>

		<p>
			<label>Telefone:</label><br>
			<input type="phone" name="fone">
		</p>

		<p>
			<label>E-mail:</label><br>
			<input type="email" name="email">
		</p>

		<p>
			<button type="submit" name="salvar">Salvar</button>
		</p>

	</form>

	<?php 
	if (!empty($_GET['msg']))
		echo validar_msg($_GET['msg']);
	?>

	<h3>Agenda de Contatos</h3>

	<?php  

	// verificar o tipo de retorno dafunção 'buscar_contatos'
	$contatos = buscar_contatos();

	// verificar se há registros a serem exibidos
	if (is_object($contatos)) // se o retorno for um objeto
	{
		// converter cada linha deste objeto em um array associativo
		while ($contato = mysqli_fetch_assoc($contatos)) 
		{
		    // percorre ro array associativo criado a partir de cada linha retornada:
		    foreach ($contato as $indice => $valor) 
		    {
		    	if ($valor != ID_CONTATO)
		    		echo  ucfirst($indice) . ": $valor<br>";
		    }

		    echo "<br>";
		}
	}
	else
	{
		echo $contatos;
	}

	?>

</body>
</html>