<?php  session_start(); // inciia a sessão
unset($_SESSION); // "mata" a sessão limpando os valores armazenados no array
session_destroy(); // finaliza de vez a sessão
header('location:index.php');
?>