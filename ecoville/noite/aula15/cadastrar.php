<?php  
// buscar por possiveis erros
// se o formulario nao foi submetido
if (!isset($_POST['cadastrar']))
{
	// redirecionar usuario para pagina principal
	header('location:index.php?msg=formnecessario');
}
#####################################################
### TODO: na proxima aula, vamos adicionar 		  ###
### verificação de campos em branco no formulário ###
#####################################################
else
{
	// incluir arquivo de funções
	include_once 'database/carros_dao.php';

	// armazenar dados do formulário num array
	$carro = $_POST;
	// descartar campo desnecessário do array
	unset($carro['cadastrar']);

	// chamar função que retorna true ou false para tentativa de insert
	$result = salvar_carro($carro);

	// verificar retorno
	if ($result)
	{
		$msg = 'cadastrado';
	}
	else
	{
		$msg = 'errocadastro';
	}

	header('location:index.php?msg='.$msg);
}

?>