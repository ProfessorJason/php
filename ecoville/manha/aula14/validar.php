<?php  
if (isset($_POST['entrar']))
{
	// incluindo constantes do sistema
	include_once 'constantes.php';


	if (empty($_POST['usuario']) || empty($_POST['senha']))
	{
		header('location:login.php?login=embranco');
	}
	else
	{
		// receber dados do form
		$login['usuario'] = $_POST['usuario'];
		$login['senha']   = $_POST['senha'];

	// verificar se o usuario e senha são os mesmos registrados nas constantes
		if ($login['usuario'] == USUARIO && $login['senha'] == SENHA)
		{
		// registrar o login e senha na sessão
			session_start();
		$_SESSION = $login; // copiamos dados de login para array superglobal $_SESSION

		// redirecionar para página de destino appos logado
		header('location:restrita.php');
		}
		else
		{
			// se os dados de usuário e senha estiverem errados, redirecionar usuário novamente para a página de login, enviando um parâmetro adicional na URL
			header('location:login.php?login=invalido');
		}

	}


}


?>