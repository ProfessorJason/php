<?php session_start(); // iniciar sessão
	unset($_SESSION); // limpa valores armazenados numa variável (ou array)
	session_destroy(); // finaliza sessão
	header('location:index.php');
?>