<?php 
include_once 'database/roupas.dao.php'; 
include_once 'util/func.inc.php';
?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Aula 13 - Home</title>
</head>
<body>

	<h1>Aula 13 - Home</h1>

	<h2>Cadastro de Roupas:</h2>

	<?php 
	if (isset($_GET['msg']))
	{
		echo validar_msg($_GET['msg']);
	}

	?>

	<form action="cadastrar.php" method="post">
		
		<p>
			<label>Tipo da roupa:</label><br>
			<select name="tipo">
				<option value="Camiseta Unisex">Camiseta unisex</option>
				<option value="Calça Jeans Masculina">Calça Jeans Masculina</option>
				<option value="Calça Jeans Feminina">Calça Jeans Feminina</option>
				<option value="Camisa Masculina">Camisa Masculina</option>
				<option value="Camisa Feminina">Camisa Feminina</option>
				<option value="Vestido Curto">Vestido curto</option>
				<option value="Saia">Saia</option>
				<option value="Bermuda">Bermuda</option>
				<option value="Regata">Regata</option>
			</select>
		</p>

		<p>
			<label>Tamanho:</label><br>
			<select name="tamanho">
				<option value="PP">PP</option>
				<option value="P">P</option>
				<option value="M">M</option>
				<option value="G">G</option>
				<option value="GG">GG</option>
				<option value="XGG">XGG</option>
			</select>
		</p>

		<p>
			<label>Cor:</label><br>
			<select name="cor">
				<option value="Azul">Azul</option>
				<option value="Verde">Verde</option>
				<option value="Vermelho">Vermelho</option>
				<option value="Preto">Preto</option>
				<option value="Branco">Branco</option>
				<option value="Rosa">Rosa</option>
				<option value="Laranja">Laranja</option>
				<option value="Bege">Bege</option>
				<option value="Roxo">Roxo</option>
				<option value="Estampado">Estampado</option>
				<option value="Outro">Outro</option>
			</select>
		</p>

		<p>
			<button type="submit" name="cadastrar">Cadastrar</button>
		</p>

	</form>

	<h3>Roupas Cadastradas:</h3>

	<?php echo exibir_roupas(); ?>

</body>
</html>