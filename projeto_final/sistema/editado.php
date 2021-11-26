<?php include_once 'lock.php';
// se o form de edição nao foi enviado ou se algum campo estiver em branco
if (!isset($_POST['salvar']) || empty($_POST['titulo']) || empty($_POST['autor']) || empty($_POST['editora']))
{
	header('location:index.php?msg=edtembranco');
}
else
{
	$id_livro = $_POST['id_livro'];
	$titulo	  = $_POST['titulo'];
	$autor    = $_POST['autor'];
	$editora  = $_POST['editora'];

	include_once '../database/livro.dao.php';

	$result = editar_livro($id_livro, $titulo, $autor, $editora);

	if ($result)
	{
		header('location:index.php?msg=editado');
	}
	else
	{
		header('location:index.php?msg=erroeditar');
	}
}


?>