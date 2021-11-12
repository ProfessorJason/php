<?php  
// verificar se o form NÃO foi submetido
if (!isset($_POST['salvar']))
{
	header('location:index.php?msg=necessario'); // voltar para a página principal
}
else if (empty($_POST['nome']) || 
		 empty($_POST['fone']) || 
		 empty($_POST['email']))
{
	header('location:index.php?msg=embranco'); // voltar para  a página principal
}
else // se não é nenhum destes erros, então prosseguimos com o cadastro
{
	// incluir o arquivo de funções
	include_once 'database/contato_dao.php';

	// receber o retorno da funçãoque irá salvar no banco
	$msg = salvar_contato($_POST['nome'], $_POST['fone'], $_POST['email']);

	if ($msg == true)
	{
		header('location:index.php?msg=salvo'); // voltar para  a página principal
	}
	else
	{
		header('location:index.php?msg=errosalvar'); // voltar para  a página 
	}
}

?>