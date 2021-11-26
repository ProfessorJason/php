<?php  
// verificar se recebemos dados de um form
if (isset($_POST['cadastrar']) && !empty($_POST['titulo']) && !empty($_POST['ano']))
{
	// prosseguimos com o codigo:

	// receber os daods do form
	$titulo = $_POST['titulo'];
	$genero = $_POST['genero'];
	$ano 	= $_POST['ano'];

	// incluir o arquivo dao (necessário para salvarmos o jogo de bd)
	include_once 'database/jogos.dao.php';

	$result = salvar_jogo($titulo, $genero, $ano);

	// verificar o valor de $result
	if ($result) // se true
	{
		// volta para página principal com msg de sucesso!
		header('location:index.php?msg=cadastrado');
	}
	else
	{
		// voçlta para página principal com msg de erro!
		header('location:index.php?msg=erro_ao_cadasrtrar');
	}
}
else
{
	// redirecionar o usuário para página principal
	header('location:index.php?msg=preencha_o_form');
}

?>