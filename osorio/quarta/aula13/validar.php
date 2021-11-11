<?php  
include_once 'constantes.php'; // incluir constantes do sistema

// buscar erros:

// se não submeteu formulário:
if (!isset($_POST['entrar']))
{
	header('location:login.php?erro=necessario');
}
// se qualquer um dos campos estiver vazio
else if (empty($_POST['usuario']) || empty($_POST['senha']))
{
	header('location:login.php?erro=embranco');
}
// se dados de login estiverem incorretos
else if ($_POST['usuario'] != USERNAME && $_POST['senha'] != PASSWORD)
{
	// redireciona usuário novamente para pagina de login
	header('location:login.php?erro=invalido');
}
else // não há erros
{
	session_start(); // inicia a sessão
	// resgitra os dados da sessão:
	$_SESSION['usuario'] = $_POST['usuario'];
	$_SESSION['senha']   = $_POST['senha'];
	header('location:restrita.php'); // redireciona usuario para pagina restrita
}
?>