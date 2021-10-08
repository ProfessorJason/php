<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>Atividade Prática 02 - Ex 04</title>
	<link rel="stylesheet" type="text/css" href="../css/estilo.css">
</head>
<body>

	<h1>Exercício 04</h1>

	<?php include_once 'menu.php'; ?>

	<h4>
		Elabore um programa que calcule o que deve ser pago por um produto, considerando o valor inicial da compra e a escolha da condição de pagamento. Utilize os códigos da tabela a seguir para ler qual a condição de pagamento escolhida e efetuar o cálculo adequado. <br><br>

		1 - À vista - 10% de desconto <br>
		2 - Cartão 1x - 5% de desconto <br>
		3 - Cartão 2x - Sem desconto <br>
		4 - Cartão 3x - 10% de juros
	</h4>

	<form action="ex4.php" method="post">
		
		<p>
			<label>Valor da compra:</label><br>
			<input type="number" name="valor" required step="0.01" min="10">
		</p>

		<p>
			<label>Selecione a forma de pagamento:</label><br>
			<select name="pagamento">
				<option value="1">1 - À vista - 10% de desconto</option>
				<option value="2">2 - Cartão 1x - 5% de desconto</option>
				<option value="3">3 - Cartão 2x - sem desconto</option>
				<option value="4">4 - Cartão 3x - 10% de juros</option>
			</select>
		</p>

		<p>
			<button type="submit" name="finalizar">Finalizar Compra</button>
		</p>

	</form>

	<?php  

	if (isset($_POST['finalizar']))
	{
		$valor 		= $_POST['valor'];
		$pagamento  = $_POST['pagamento'];

		switch($pagamento)
		{
			case 1:
				$final = $valor * 0.9;
				break;

			case 2:
				$final = $valor * 0.95;
				break;

			case 3:
				$final = $valor;
				break;

			case 4: // podemos também usar o default neste caso
				$final = $valor * 1.10; 
				break;
		}

		$valor = number_format($valor, '2', ',', '.');
		$final = number_format($final, '2', ',', '.');

		echo "Opção de pagamento: $pagamento. <br>";
		echo "Valor da compra: R$ $valor <br>";
		echo "Valor final: R$ $final";


	}


	?>

</body>
</html>