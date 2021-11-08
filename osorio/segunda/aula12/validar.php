<?php  

// se o formulário foi enviado
if(isset($_POST['entrar']))
{

	// verificar se algum campo do formulário ficou em branco
	if (empty($_POST['usuario']) || empty($_POST['senha']))	
	{
		// redirecionar usuario para página de login 
		header('location:login.php?login=embranco');
	}
	else // senão ficaram vazios os campos do formuálário
	{
		// armazenar os dados do formulário
		$login['usuario'] = $_POST['usuario'];
		$login['senha']   = $_POST['senha'];

		// verirficar se dados do formulário batem com usuário e senha do sistema
		if ($login['usuario'] == 'admin' && $login['senha'] == 'lalala123')
		{
			// iniciar a sessão para podermos manipular o array de sessão
			session_start();
			// registra a sessão com base nos dados de login
			$_SESSION = $login;
			// redirecionar usuário para página restrita
			header('location:restrita.php');
		}
		else // senão (usuário ou senha errados)
		{
			// redireciona usuário para página de login
			header('location:login.php?login=invalido');
		}

	}

}
else //senão (se o usuário tentou acessar essa página diretamente)
{
	// redirecionar o usuário novamente para a página de login
	header('location:login.php?login=necessario');
}