<?php  session_start(); // inicia sessão
unset($_SESSION); // limpamos os dados registrados da sessão
session_destroy(); // finaliza qualquer sessão aberta
header('location:index.php'); // devolve usuário para index.php
// o logout é realmente apenas isso
?>

