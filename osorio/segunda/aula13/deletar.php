<?php  
// verificar se um id foi enviado
if (!isset($_GET['id_roupa']))
{
	header('location:index.php?msg=idInvalido');
}
else
{
	$id_roupa = $_GET['id_roupa'];

	include_once 'database/roupas.dao.php';

	$result = deletar_roupa($id_roupa);

	if ($result)
	{
		header('location:index.php?msg=roupaExcluida');
	}
	else
	{
		header('location:index.php?msg=erroExcluir');
	}
}


?>