<?php 
// se o parametro id_link NÃO foi recebido
if (!isset($_GET['id_jogo']))
{
	header('location:index.php?msg=id_invalido');
}
else
{
	include_once 'database/jogos.dao.php';

	$result = deletar_jogo($_GET['id_jogo']);

	if ($result)
	{
		header('location:index.php?msg=jogo_deletado');
	}
	else
	{
		header('location:index.php?msg=erro_deletar');
	}
}


?>