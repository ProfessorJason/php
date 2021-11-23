<?php  
// veriricar se form não foi submetido
if (!isset($_POST['salvar']))
{
	// redirecionar o usuário para index.php mandando o parametor msg com um valor acusando erro
	header('location:index.php?msg=idinvalido');
}
else
{
	// receber os dados do form
	$id_filme	= $_POST['id_filme'];
	$titulo		= $_POST['titulo'];
	$genero		= $_POST['genero'];
	$ano		= $_POST['ano'];

	include_once 'database/filmes.dao.php';

	$result = editar_filme($id_filme, $titulo, $genero, $ano);

	if ($result)
	{
		header('location:index.php?msg=filmeeditado');
	}
	else
	{
		header('location:index.php?msg=erroeditar');
	}
}

?>