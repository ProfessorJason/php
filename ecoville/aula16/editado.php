<?php  
if (!isset($_POST['salvar']) || empty($_POST['titulo']) || empty($_POST['ano']))
{
	header('location:index.php?msg=erro_editar');
}
else
{
	$id_jogo = $_POST['id_jogo'];
	$titulo  = $_POST['titulo'];
	$genero  = $_POST['genero'];
	$ano	 = $_POST['ano'];

	include_once 'database/jogos.dao.php';

	$result = editar_jogo($id_jogo, $titulo, $genero, $ano);

	if ($result)
	{
		header('location:index.php?msg=jogo_editado');
	}
	else
	{
		header('location:index.php?msg=erro_editar');
	}
}


?>