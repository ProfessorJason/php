<?php  
// verificar se o form NÃO foi enviado
if (!isset($_POST['entrar']) || empty($_POST['usuario']) || empty($_POST['senha']))
{
	// redirecionar usuario para home
	header('location:index.php?msg=embranco');
}
else 
{
	$usuario = $_POST['usuario'];
	$senha 	 = $_POST['senha'];

	// incluir o arquivo usuario.dao
	include_once 'database/usuario.dao.php';

	// buscar usuário na tabela usuarios_tb com base nos dados fornecidos no form
	$result = buscar_usuario($usuario, $senha);

	// se o usuário e senha estiverem corretos, o valor de $result será true
	if ($result)
	{
		// iniciar a sessao
		session_start();
		$_SESSION['usuario'] = $usuario;
		$_SESSION['senha'] = $senha;

		// redirecionar usuario para pagina restrita
		header('location:sistema/index.php');
	}
	else
	{
		// redirecionar usuario de volta para home
		header('location:index.php?msg=invalido');
	}
}

?>