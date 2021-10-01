<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>Atividade Prpatica 02 - Ex 04</title>
	<link rel="stylesheet" type="text/css" href="../css/estilo.css">
</head>
<body>

	<h1>Atividade Prpatica 02 - Ex 04</h1>

	<?php  include_once 'menu.php';	?>

	<h4>
		Elabore um programa que calcule o que deve ser pago por um produto, considerando o valor inicial da compra e a escolha da condição de pagamento. Utilize os códigos da tabela a seguir para ler qual a condição de pagamento escolhida e efetuar o cálculo adequado. <br><br>

		Código - Condição de pagamento:<br>
		1 à vista em dinheiro ou cheque, recebe 10% de desconto <br>
		2 à vista no cartão de crédito, recebe 5% de desconto <br>
		3 em 2 vezes, preço da etiqueta sem juros <br>
		4 em 3 vezes, preço da etiqueta mais juros de 10%
	</h4>

	<form action="ex4.php" method="post">

		<p>
			<label>Valor do produto:</label><br>
			<input type="number" name="valor" min="10" step="0.01">
		</p>

		<p>
			<label>Condição de pagamento:</label><br>
			<select name="pagamento" required>
				
				<option value="1">À vista - 10% de desconto</option>
				<option value="2">Cartão 1x - 5% de desconto</option>
				<option value="3">Cartão 2x - sem desconto</option>
				<option value="4">Cartão 3x - 10% de juros</option>

			</select>
		</p>

		<p>
			<button type="submit" name="enviar">Enviar</button>
		</p>

	</form>

	<?php  

	if(isset($_POST['enviar']))
	{
		$valor = $_POST['valor'];
		$pagamento = $_POST['pagamento'];


		switch($pagamento)
		{

			case 1:
				$final = $valor * 0.9; // tiramos aqui 10% de desconto
				break;

			case 2:
				$final = $valor * 0.95; // 5% de desconto
				break;

			case 3:
				$final = $valor;
				break;

			default: // nesse caso, só pode ser 4 (ou qualquer oturo valor qeu não seja 1, 2 ou 3)
				$final = $valor + ($valor * 0.1); // modo tradicional de calculo de %
				break;
		}

		echo "<h4>Valor original: R\$ " . number_format($valor, '2', ',', '.') . "<br>
		Valor final: R\$ " . number_format($final, '2', ',', '.') . "</h4>";

	}


	?>


</body>
</html>