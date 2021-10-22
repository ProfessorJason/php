<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>Aula 12 - Home</title>
	<link rel="stylesheet" type="text/css" href="css/estilo.css">
</head>
<!-- body onload="showAlert()"  se usar o javascript, utilizar este body ao invés do normal de baixo-->
<body>

	<h1>Aula 12 - Formulários e Laços de Repetição</h1>

	<p>
		Crie um formulário para cadastro de um contato, contendo os campos: nome, e-mail, telefone e endereço. Realize as seguintes validações para este cadastro:
	</p>

	<p>
		<ul>
			<li>O forumlário só será exibido se ele não foi enviado</li>
			<li>Depois de enviado, caso todos os dados obrigatórios tenham sido preenchidos, exibí-los na tela, mas ocultar o formulário</li>
			<li>Os campos obrigatórios são: nome e e-mail.</li>
			<li>Caso o nome ou e-mail não tenham sido preenchidos ao submeter o formulário, exibir uma mensagem de erro, informando quais campos foram deixados em branco</li>
			<li>Se os campos não obrigatórios não forem informados, na hora de exibir os dados cadastrados, mostrar, para estes campos, a mensagem 'não informado'</li>
			<li>Em caso de algum campo obrigatório não ter sido preenchido, após a mensagem de erro, exibir o formulário</li>
		</ul>
	</p>

	<?php  


	if (isset($_POST['cadastrar']))
	{
		// se os dados foram enviados

		// verificar campos em branco
		if (empty($_POST['nome']))
		{
			$erro[] = "Nome não pode estar em branco!";
		}
		if (empty($_POST['email']))
		{
			$erro[] = "E-mail não pode estar em branco!";
		}

		// verificar se há erro(s)
		if (isset($erro))
		{
			echo '<h3 class="erro">Verifique os seguintes erros:</h3>';

			foreach ($erro as $valor) 
			{
				echo '<div class="erro">'.$valor.'</div>';
			}

			include 'form_home.php';


			/* mostrar em um alert do ajva script a msg de erro:

			$msg = "Verifique os seguintes erros:" . '\n';

			foreach ($erro as $valor) 
			{
				$msg .= $valor . '\n';
			}

			echo "<script>function showAlert(){
				alert('$msg'); }</script>";

			include 'form_home.php';*/

		} // se não houver erro?
		else
		{
			// copiamos os dados enviados via post par aum novo array 'cadastro'
			$cadastro = $_POST;

			echo "<h3>Dados Cadastrados</h3>";

			// usar um foreach para percorrer o array 'cadastro'
			foreach ($cadastro as $indice => $valor) 
			{
				// mostrar os dados do array, desde que o índice não seja 'cadastrar'
				if ($indice != 'cadastrar')
				{
					if (empty($valor))
					{
						echo strtoupper($indice) . ": Não informado<br>";
					}
					else
					{
						echo strtoupper($indice) . ": $valor<br>";
					}
				}
			}

			echo '<p><a href="index.php">Novo Cadastro</a></p>';

		}


	}
	else
	{
		// mostramos o formulário
		include 'form_home.php';
	}

	?>

</body>
</html>