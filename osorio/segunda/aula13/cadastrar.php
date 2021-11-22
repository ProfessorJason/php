<?php  
// verificar se o form de cadastro foi submetido
if (!isset($_POST['cadastrar']))
{
	// redirecionar o usuário novamente para a home
	header('location:index.php?msg=cadNecessario');
}
else
{
	// armazenar dados do form
	$tipo 	 = $_POST['tipo'];
	$tamanho = $_POST['tamanho'];
	$cor 	 = $_POST['cor'];

	// incluir arquivo dao
	include_once 'database/roupas.dao.php';

	// chamar a função que tenta salvar uma roupa na tabela roupas_rb
	$result = salvar_roupa($tipo, $tamanho, $cor);

	// verificar o valor do retorno
	if ($result)
	{
		header('location:index.php?msg=roupaCadastrada');
	}
	else
	{
		header('location:index.php?msg=erroCadastro');
	}
}

?>