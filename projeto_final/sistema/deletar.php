<?php  include_once 'lock.php';

if (!isset($_GET['id_livro']))
{
	header('location:index.php?msg=idinvalido');
}
else
{
	$id_livro = $_GET['id_livro'];

	include_once '../database/livro.dao.php';

	$result = deletar_livro($id_livro);

	if ($result)
	{
		header('location:index.php?msg=livrodeletado');
	}
	else
	{
		header('location:index.php?msg=errodeletar');
	}
}


?>