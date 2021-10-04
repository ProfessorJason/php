<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>Atividade 02 - Ex 04</title>
	<link rel="stylesheet" type="text/css" href="../css/estilo.css">
</head>
<body>

	<h2>Exercício 04</h2>

	<?php include_once 'menu.php'; ?>


	<h4>
		Elabore um programa que calcule o que deve ser pago por um produto, considerando o valor inicial da compra e a escolha da condição de pagamento. Utilize os códigos da tabela a seguir para ler qual a condição de pagamento escolhida e efetuar o cálculo adequado. <br><br>
		Código: Condição de pagamento<br>
		1 - à vista em dinheiro ou cheque, recebe 10% de desconto<br>
		2 - à vista no cartão de crédito, recebe 5% de desconto<br>
		3 - em 2 vezes, preço da etiqueta sem juros<br>
		4 - em 3 vezes, preço da etiqueta mais juros de 10%
	</h4>

	<form action="ex4.php" method="post">

		<p>
			<label>Valor do produto:</label><br>
			<input type="number" name="valor" required min="1" step="0.01">
		</p>

		<p>
			<label>Selecione a forma de pagamento:</label><br>
			
			<select name="pagamento">
				<option value="1">Á vista: 10% de desconto</option>
				<option value="2">Cartão 1x: 5% de desconto</option>
				<option value="3">Cartão 2x: sem desconto</option>
				<option value="4">Cartão 3x: 10% de juros</option>
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
			$final = $valor * 0.9; // desconto 10% do valor
			break;

			case 2:
			$final = $valor * 0.95; // desconto de 5%
			break;

			case 3:
			$final = $valor;
			break;

			default:
			$final = $valor * 1.10; // 10% de juros
			break;
		}

		$valor = number_format($valor, '2', ',', '.');
		$final = number_format($final, '2', ',', '.');

		echo "Valor original: R$ $valor<br>";
		echo "Valor final : R$ $final";
	}


	?>

</body>
</html>