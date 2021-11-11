<?php  session_start(); // inicia a sessão para podermos acessar o array SESSION
	if (empty($_SESSION)) // o array SESSION está vazio?
	{
		header('location:login.php'); // redireciona usuário p/ pagina de login
	}
?>