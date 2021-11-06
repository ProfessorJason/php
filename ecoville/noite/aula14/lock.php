<?php session_start(); // iniciar a sessão
if(empty($_SESSION)) // se a variaável de sessão estiver em branco
{
	header('location:login.php'); // redireciona par apagina de login
}
?>