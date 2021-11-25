<?php  // verificar se o parametro id_prato NAO foi recebido via get
if (!isset($_GET['id_prato']))
{
	// redirecionar o usuario para index
	header('location:index.php?msg=idinvalido');
}
?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Aula 15 - Editar Prato</title>
</head>
<body>

	<?php  
	include_once 'database/pratos.dao.php';

	// buscar prato contendo o id do prato recebido via get
	$result = buscar_prato($_GET['id_prato']);

	// verificar o valor de result (qual foi o retorno armazenado na variavel $result)
	if ($result == null)
	{
		header('location:index.php?msg=idinvalido');
	}
	else // senao, significa que o retorno foi um objeto contendo os dados de um prato 
	{
		// converter este objeto em um array associativo
		$prato = mysqli_fetch_assoc($result);

		// verificar o valor de $prato['tipo']

		if ($prato['tipo'] == 'Salgado')
		{
			$salgado = 'checked';
			$doce = '';
		}
		else
		{
			$salgado = '';
			$doce = 'checked';
		}
	}

	?>

	<h1>Aula 15 - Editar Prato</h1>

	<p>
		<a href="index.php">CANCELAR EDIÇÃO</a>
	</p>

	<h2>Utilize o form abaixo para editar os dados do prato # <?= $_GET['id_prato'] ?>:</h2>

	<form action="editado.php" method="post">

		<p>
			<label>Nome do prato:</label><br>
			<input type="text" name="nome" required value="<?= $prato['nome'] ?>">
		</p>

		<p>
			<label>Tipo de prato:</label><br>
			<input type="radio" name="tipo" value="Salgado" <?= $salgado ?>> Salgado 
			<input type="radio" name="tipo" value="Doce" <?= $doce ?>> Doce
		</p>

		<p>
			<label>Valor do prato: R$</label><br>
			<input type="number" name="valor" min="1.00" max="999" step="0.01" required value="<?= $prato['valor'] ?>">
		</p>

		<input type="hidden" name="id_prato" value="<?= $prato['id_prato'] ?>">

		<p>
			<button type="submit" name="salvar">Salvar Alterações</button>
		</p>
		
	</form>


</body>
</html>