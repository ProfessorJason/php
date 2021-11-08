<?php session_start(); // inicia sessão
unset($_SESSION); // limpando sessão registrada
session_destroy(); // destruir a sessão no servidor
header('location:index.php'); // redireciona usuário para página principal