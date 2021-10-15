<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>Aula 11 - Foreach - Ex3</title>
	<link rel="stylesheet" type="text/css" href="../css/estilo.css">
</head>
<body>

	<h1>Foreach - Exemplo 03</h1>

	<?php include_once '../menu.php'; ?>

	<p>
		Outra possibilidade de trabalharmos com arrays, é nomearmos os índices. Isto é chamados de <i>array associativo</i>.
	</p>

	<p>
		Vamos, neste exemplo, armazenar os dados de um contato. Mas ao invés de utilizarmos variáveis simples, utilizaremos um array associativo. <br>
		Com variáveis simples, os dados seriam armazenados desta maneira:
	</p>

	<p class="code">
		$nome = "João da silva"; <br>
		$idade = 34; <br>
		$email = "joao@dasilva.com"; <br>
		$fone = "(41) 3356-9874"; <br>
		$cel = "(41) 99876-5678";
	</p>

	<p>
		Com um array associativo, os dados seriam armazenados desta maneira:
	</p>

	<p class="code">
		
		$contato['Nome'] = "João da Silva"; <br>
		$contato['Idade'] = 34 <br>
		$contato['E-mail'] = "joao@dasilva.com"; <br>
		#contato['Fone'] = "(41) 3356-9874"; <br>
		$contato['Cel'] = "(41) 99876-5678";

	</p>

	<p>
		Para percorrermos este array associativo e mostrarmos também o <i>nome</i> dos índices, e não apenas os <i>valores</i> armazenados em cada índice, utilizaremos a sintaxe completa do <i>foreach</i>, a saber:
	</p>

	<p class="code">
		
		foreach($contato as $indice => $valor) <br>
		{ <br>
			<span>echo $indice . ": " . $valor . "< br>";</span> <br>
		}

	</p>

	<p>
		Acima, a cada passagem do laço de repetição, o nome do índice será copiado para a variável <b>$indice</b>, e o valor armazenado neste índice será copiado para a variável <b>$valor</b>.
	</p>

	<h3>A saída de dados abaixo se dará por meio do PHP, utilizando o mesmo array $contato</h3>

	<?php  

	// criar o array associativo $contato
	$contato['Nome'] = "João da Silva";
	$contato['Idade'] = 34;
	$contato['E-mail'] = "joao@dasilva.com";
	$contato['Fone'] = "(41) 3356-9874";
	$contato['Cel'] = "(41) 99876-5678";

	echo "<h4>Mostrando apenas o nome do contato: " . $contato['Nome'] . "</h4>";

	echo "<h4>Mostrando todos os dados do contato:</h4>";

	foreach ($contato as $indice => $valor) 
	{
		echo $indice . ": " . $valor . "<br>"	;
	}


	?>

</body>
</html>