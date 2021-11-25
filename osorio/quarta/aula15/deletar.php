<?php  
// veriricar se o parametro id_prato NÃO foi enviado
if (!isset($_GET['id_prato']))
{
	// redirecionar o usuario para a index.php com o parametor msg indicando um erro
	header('location:index.php?msg=idinvalido');
}
else // senão (o id foi enviado via get)
{
	// incluir arquivo dao
	include_once 'database/pratos.dao.php';

	$id = $_GET['id_prato'];
	$result = deletar_prato($id);

	// checar o valor de $result
	if ($result) // se for true
	{
		header('location:index.php?msg=pratodeletado');
	}
	else
	{
		header('location:index.php?msg=errodeletar');
	}
}

?>