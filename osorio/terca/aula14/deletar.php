<?php  
// verificar se um id_filme não foi enviado via get
if (!isset($_GET['id_filme']))
{
	// redirecionar o usuário para index.php mandando o parametor msg com um valor acusando erro
	header('location:index.php?msg=idinvalido');
} 
else // senão (o id_filme FOI enviado via GET)
{
	$id_filme = $_GET['id_filme'];

	// incluir o arquivo filmes.dao
	include_once 'database/filmes.dao.php';

	$result = deletar_filme($id_filme); // tenta deletar o filme a partir do id informado

	// testa ro valor de $result, que pode ser true, caso o comando tenha sido executado corretamente
	// (ou seja, o filme foi deletado), ou false, caso tenha ocorrido algum problema ao deletar o filme
	if ($result)
	{
		// retornar à página principal enviando o parametro msg para informar que deu certo a exclusão!
		header('location:index.php?msg=filmedeletado');
	}
	else // se o retorno da função foi 'false'
	{
		// retornar à página principal enviando o parametro msg para informar que NÃO deu certo a exclusão!
		header('location:index.php?msg=errodeletar');
	}
}






?>