<?php  
if (isset($_POST['entrar'])) // form foi enviado
{
	
	// os campos estão em branco?
	if (empty($_POST['usuario']) || empty($_POST['senha']))
	{
		// redirecionar de volta para login.php com um parâmetro de erro
		header('location:login.php?login=embranco');
	}
	else
	{


		$login['usuario'] = $_POST['usuario'];
		$login['senha']   = $_POST['senha'];

		// verificar se usuário e senha são válidos
		if ($login['usuario'] == 'admin' && $login['senha'] == '1234')
		{
			// se os dados estiverem ok:
			// iniciar a sessão
			session_start(); // necessário para acessar o array SESSION
			// registrar a sessão
			$_SESSION = $login;
			// redirecionar usuário para a página restrita.php
			header('location:restrita.php');
		} 
		else // se os dados estiverem errados
		{
			// redirecionar de volta para login.php com um parâmetro de erro
			header('location:login.php?login=invalido');
		}

	}
	
} // se o form não foi submetido
else
{
	// redirecionar de volta para login.php com um parâmetro de erro
		header('location:login.php?login=necessario');
}