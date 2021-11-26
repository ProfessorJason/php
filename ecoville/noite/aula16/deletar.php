<?php  
// verificar se o parametro id_jogo NAO FOI enviado
if (!isset($_GET['id_jogo']))
{
	// retorne à home com msg de erro
	header('location:index.php?msg=id_invalido');
}
else
{
	include_once 'database/jogos.dao.php';

	$result = deletar_jogo($_GET['id_jogo']);

	if ($result) // verificar s eo valor de result é true
	{
		// retorne à home com msg de sucesso
		header('location:index.php?msg=jogo_deletado');
	}
	else
	{
		// retorne à home com msg de erro
		header('location:index.php?msg=erro_deletar');
	}
}


?>