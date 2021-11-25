<?php  
// verificar se o form editar foi submetido
if (!isset($_POST['salvar']))
{
	// redirecionar o usuario para a index.php com o parametor msg indicando um erro
	header('location:index.php?msg=erroeditar');
}
else // senão (o form foi enviado via post)
{
	// receber dados do form
	$id_prato	= $_POST['id_prato'];
	$nome	 	= $_POST['nome'];
	$tipo		= $_POST['tipo'];
	$valor		= $_POST['valor'];

	// incluir dao
	include_once 'database/pratos.dao.php';

	$result = editar_prato($id_prato, $nome, $tipo, $valor);

	// checar o valor do 'result'
	if ($result)
	{
		header('location:index.php?msg=pratoeditado');
	}
	else
	{
		header('location:index.php?msg=erroeditar');
	}
}

?>