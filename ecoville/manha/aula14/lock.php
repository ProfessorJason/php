<?php session_start(); // inicia a sessão 
	// verificar se o usuário está logado
	if (empty($_SESSION)) { // se não possui sessão registrada
		header('location:login.php'); // redireciona o usuário para login.php
	}
?>