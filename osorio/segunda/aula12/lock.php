<?php  session_start(); // iniciar sessão
	// verificar se a sessão está em branco
	if(empty($_SESSION)) // se isos for verdade, não há usuário logado
	{
		header('location:login.php'); // redireciona para login
	}
?>