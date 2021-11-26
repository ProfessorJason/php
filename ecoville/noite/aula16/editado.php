<?php  
// verificar se NÃO recebemos dados do form de edição
if (!isset($_POST['salvar']) || empty($_POST['titulo']) || empty($_POST['ano']))
{
	header('location:index.php?msg=preencha_o_formedt');
}
else
{
	// prosseguimos com o codigo:

	// receber os daods do form
	$id_jogo = $_POST['id_jogo'];
	$titulo  = $_POST['titulo'];
	$genero  = $_POST['genero'];
	$ano 	 = $_POST['ano'];

	include_once 'database/jogos.dao.php';

	$result = editar_jogo($id_jogo, $titulo, $genero, $ano);

	// se o valor retornado pela função editar_jogo for true
	if($result)
	{
		// regressamos à index com msg de sucesso
		header('location:index.php?msg=jogo_editado');
	}
	else
	{
		// senão, houve um erro ao tentar editar o jogo especificado
		// regressamos à index com msg de erro
		header('location:index.php?msg=erro_editar');
	}
}

?>