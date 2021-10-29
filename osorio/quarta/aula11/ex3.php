<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>Aula 11 - Foreach - Ex 02</title>
	<link rel="stylesheet" type="text/css" href="css/estilo.css">
</head>
<body>

	<h1>Laço For - Foreach Exemplo 02</h1>

	<?php include_once 'menu.php'; ?>

	<p>
		Crie um array associativo chamado 'contato'. Em cada posição deste array, armazene um dado diferente do contato: nome, idade, telefone, email, endereço. Utilize a prerrogativa completa do foreach para exibir os índices e seus valores na tela.
	</p>

	<h3>Resultado:</h3>

	<?php  

	// criar array associativo 'contato'
	// array associativo é quando nomeamos os índices do array
	$contato['nome'] 	 = "Jason Sobreiro"; // indice 'nome' recebe o valor 'Jason Sobreiro'
	$contato['idade'] 	 = 34;
	$contato['telefone'] = "(41) 99999-8888";
	$contato['email'] 	 = "jason.sobreiro@up.edu.br";
	$contato['endereco'] = "Rua da luz, 123";

	// outra forma de criar array associativo
	$contato2 = array(
		'nome' => "Luana",
		'idade' => 22,
		'telefone' => "(41) 3333-4444",
		'email' => "luana@gmail.com",
		'endereco' => "Rua da paz, 321"
	);



	// mostrando contato com foreach

	echo "<h4>Contato 1:</h4>";
	foreach ($contato as $pos => $valor) 
	{
		echo strtoupper($pos) . ": $valor <br>";
	}

	// mostrando contato2 com foreach
	echo "<h4>Contato 2:</h4>";
	foreach ($contato2 as $pos => $valor) 
	{
		echo strtoupper($pos) . ": " . $valor . "<br>";
	}

	// criando array de arrays
	$agenda = array ($contato, $contato2);

	// mostrando $agenda com print_r
	echo "<h4>Agenda com print_r:</h4>";
	echo '<pre>';
	print_r($agenda);
	echo '</pre>';

	echo "<h4>Agenda com foreach duplo:</h4>";

	// primeiro foreach é para percorrer o array de agendas
	foreach ($agenda as $contato_atual) 
	{
		// a cada passagem, copiamos um contato da agenda para $contato_atual

		// percorrer o array $contato_atual com um outro foreach
		foreach ($contato_atual as $pos => $valor) 
		{
			echo strtoupper($pos) . ": " . $valor . "<br>";
		}
		// após mostrar o $contato_atual, pula uma linha adicional
		echo "<br>";
	}


	?>
</body>
</html>
