<?php  include_once 'lock.php';
if (!isset($_POST['salvar']) || empty($_POST['titulo']) || empty($_POST['autor']) || empty($_POST['editora']))
{
	header('location:index.php?msg=cadembranco');
}
else
{
	$titulo	 = $_POST['titulo'];
	$autor   = $_POST['autor'];
	$editora = $_POST['editora'];

	include_once '../database/livro.dao.php';

	$result = salvar_livro($titulo, $autor, $editora);

	if ($result)
	{
		header('location:index.php?msg=cadastrado');
	}
	else
	{
		header('location:index.php?msg=errocadastro');
	}
}

?>