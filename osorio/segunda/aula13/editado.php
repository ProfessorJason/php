<?php  
include_once 'database/roupas.dao.php'; 
if (isset($_POST['editar']))
{
	$id_roupa = $_POST['id_roupa'];
	$tipo 	  = $_POST['tipo'];
	$tamanho  = $_POST['tamanho'];
	$cor 	  = $_POST['cor'];

	$result = editar_roupa($id_roupa, $tipo, $tamanho, $cor);

	if ($result)
	{
		header('location:index.php?msg=roupaEditada');
	}
	else
	{
		header('location:index.php?msg=erroEditar');
	}
}
else
{
	header('location:index.php?msg=idInvalidoEdt');
}


?>