<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>Atividade 02 - Ex 04</title>
	<link rel="stylesheet" type="text/css" href="../css/estilo.css">
</head>
<body>

	<h1>Atividade 02 - Exercício 04</h1>

	<?php include_once 'menu.php'; ?>

	<form action="ex4.php" method="post">
		
		<p>
			<label>Valor do produto:</label><br>
			<input type="number" name="valor" required min="10" step="0.01">
		</p>

		<p>
			<label>Selecione a opção de pagamento:</label><br>
			<select name="pagamento">
				<option value="1">À vista - 10 % de desconto</option>
				<option value="2">Cartão 1x - 5% de desconto</option>
				<option value="3">Cartão 2x - sem desconto</option>
				<option value="4">Cartão 3x - 10% de juros</option>
			</select>
		</p>

		<p>
			<button type="submit" name="finalizar">Finalizar Compra</button>
		</p>

	</form>
	
	<?php 

	if (isset($_POST['finalizar']))
	{
		$valor = $_POST['valor'];
		$pagamento = $_POST['pagamento'];

		switch($pagamento)
		{
			case 1:
				$final = $valor * 0.9; // 10% de desconto
				break;

			case 2:
				$final = $valor * 0.95; // 5% de desconto
				break;

			case 3:
				$final = $valor;
				break;

			default:
				$final = $valor + ($valor * 0.10 );//$valor * 1.1;
				break;
		}

		$final = number_format($final, '2', ',', '.');
		echo "Valor final da compra: R\$ $final";
	}

	?>


</body>
</html>