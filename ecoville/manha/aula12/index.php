<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>Aula 12 - Home</title>
	<link rel="stylesheet" type="text/css" href="css/estilo.css">
</head>
<body>

	<h1>Aula 12 - Trabalhando com laços de repetição</h1>

	<p>
		Vimos nas aulas anteriores como trabalhar coms 4 tipos de laços de repetição no <b>PHP</b>: for, while, do/while, foreach. Porém, não utilizamos entrada de dados nos exemplos passados. Hoje trabalharemos com entrada de dados e laços de repetição.
	</p>

	<p>
		Como exemplo inicial, preencha os dados do 'cadastro' abaixo:
	</p>

	<?php 

	// veirifcar se o formulário foi enviado:
	if(isset($_POST['cadastrar']))
	{

		
		// criando um array de erros (para os campos em branco)
		if (empty($_POST['nome'])) // se o campo nome estiver me branco
		{
			$error[] = "Nome"; // array de erro recebe o texto 'Nome'
		}

		if (empty($_POST['email'])) // se o campo email estiver em branco
		{
			$error[] = "E-mail"; // array de erro recebe o texto 'E-mail'
		}

		// se houver algum erro registrado no array de erros (se  oarray existe)
		if (isset($error))
		{
			// percorrer o array de erros
			echo "<h3>Os seguintes campos não podem estar em branco: ";
			$tamanho = count($error); // tamanho do array
			$i = 1; // contador para alcançar o tamanho do array

			foreach($error as $valor)
			{
				// se houver dois valores, separar com , e terminar com .
				if ($i != $tamanho)
				{
					echo "$valor, ";
				} else { // se houver um valor apenas, terminar com .
					echo "$valor.";
				}
				$i++; // aumento do contador
				
			}
			echo "</h3>"; // fecha string com h3

			// incluir formulário novamente para permitir cadastro completo:
			include 'form_home.php';
		}
		else // se não houver erro, prosseguimos com o código
		{
			$cadastro = $_POST; // transformando $cadastro em um array
			// com os dados vindos do form (via post)

			// mostrando dados cadastrados utilizando foreach

			echo "<h3>Dados cadastrados</h3>";
			foreach ($cadastro as $indice => $valor)
			{
				// se o índice 	FOR DIFERENTE DE 'cadastrar'
				if($indice != 'cadastrar')
				{
					
					// se $valor estiver em branco
					if (empty($valor))
					{
						// mostrar 'Não informado' ao invés de string vazia
						echo strtoupper($indice) . ": Não informado<br>";
					}
					else // senão está em branco
					{
						// apenas mostr eo valor
						echo strtoupper($indice) . ": $valor<br>";
					}
					
				}

			}// fim foreach

			// após mostrar os dados array, mostramos um link para recarregar a pg:
			echo '<p><a href="index.php">Novo cadastro</a></p>';
		}// fim else para exibir dados do form

	} else { // caso o formulário NÃO TENHA SIDO ENVIADO

		// mostramos novamente o formulário na home
		include 'form_home.php'; 

	}



	?>

</body>
</html>