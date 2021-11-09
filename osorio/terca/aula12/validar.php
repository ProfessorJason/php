<?php  

// verificar se o formulário foi submetido
if (isset($_POST['entrar']))
{
	
	// verificar se algum campo do form foi enviado em branco
	if (empty($_POST['usuario']) || empty($_POST['senha']))
	{
		// redirecionar usuário para página de login
		header('location:login.php?erro=embranco');
	}
	else // senão (ou seja, campos do form foram preenchidos
	{
		// receber dados do formulário
		$usuario = $_POST['usuario'];
		$senha	 = $_POST['senha'];	

		// incluir constantes do sistema:
		include_once 'constantes.php'; 

		// comparar dados do formulario com o usuário e senha do sistema
		if ($usuario == USERNAME && $senha == PASSWORD)
		{
			// iniciar a sessão
			// OBS: sempre que formos acessar as vairáveis de sessão, 
			// precisamos chamar o comando session_start() antes
			session_start();
			// registrar as variáveis de sessão
			$_SESSION['usuario'] = $usuario;
			$_SESSION['senha'] 	 = $senha;
			// redirecionar o usuário para a página restrita
			header('location:restrita.php');
		}
		else // senão... (os dados de login estão incorretos)
		{
			header('location:login.php?erro=invalido');
		}

	}
}
else // usuário acessou diretamente validar.php sem ter submetido o form
{
	// redirecionar o usuário para a página de login
	header('location:login.php?erro=necessario'); 
}



?>