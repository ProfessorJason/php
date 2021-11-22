<?php  
include_once 'database/roupas.dao.php';

$result = buscar_roupa($_GET['id_roupa']);

if ($result == null)
{
	header('location:index.php?msg=idInvalidoEdt');
}
else
{
	// converter o retorno num array associativo
	$roupa = mysqli_fetch_assoc($result);

}

?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Aula 13 - Editar Roupa</title>
</head>
<body>

	<h1>Aula 13 - Editar Roupa</h1>

	<p>
		<a href="index.php">Cancelar Edição</a>
	</p>

	<form action="editado.php" method="post">
		
		<p>
			<label>Tipo da roupa:</label><br>
			<select name="tipo">
				<option value="<?= $roupa['tipo']; ?>"><?= $roupa['tipo'] ?></option>
				<option disabled>--------------------------------</option>
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
				<option value="<?= $roupa['tamanho']; ?>"><?= $roupa['tamanho'] ?></option>
				<option disabled>---------</option>
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
				<option value="<?= $roupa['cor']; ?>"><?= $roupa['cor'] ?></option>
				<option disabled>-----------</option>
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
			<button type="submit" name="editar">Editar</button>
		</p>

		<input type="hidden" name="id_roupa" value="<?= $roupa['id_roupa'] ?>">

	</form>


</body>
</html>