<?php  

include 'carros_dao.php';

$result = exibir_carros();

// verificar se $result é um objeto de retorno válido
if (is_object($result))
{
	// converter cada linha da tabela retornada para $result, em um array associativo
	while($linha = mysqli_fetch_assoc($result))
	{
		// percorrer este aray associativo para mostrar os valores na tela
		foreach ($linha as $indice => $valor) 
		{
			echo "$indice: $valor<br>";
		}
		echo "<br>";
	}
}
else
{
	echo "Nada a exibir";
}


?>