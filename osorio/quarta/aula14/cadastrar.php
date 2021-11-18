<?php  
// verificar se chegamos ensta página SEM ter submetido o formulario
if (!isset($_POST['cadastrar']))
{
	//redirecionar o usuário para página principal
	header('location:index.php');
}
else // senão, o form foi submetido
{
	// receber os dados do form
	$nome  = $_POST['nome'];
	$tipo  = $_POST['tipo'];
	$valor = $_POST['valor'];

	// incluir nosso arquivo de acesos ao banco
	include_once 'database/pratos.dao.php';

	// chamar a função para salvar prato na tabela pratos_tb
	$result = salvar_prato($nome, $tipo, $valor);

	if ($result) // se o valor de 'result' for true
	{
		header('location:index.php?msg=cadastrado');
	}
	else
	{
		header('location:index.php?msg=errocadastro');
	}

}

?>