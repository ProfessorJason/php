<?php  
// verificar se chegamos nedta página através de um formulário
if (isset($_POST['cadastrar']))
{
	// receber dados do form
	$titulo = $_POST['titulo'];
	$genero = $_POST['genero'];
	$ano 	= $_POST['ano'];

	// incluir o dao
	include_once 'database/filmes.dao.php';

	// invocar a função para cadastrar
	$result = salvar_filme($titulo, $genero, $ano);

	if ($result) // se resullt for verdadeiro
	{
	// redirecionamos o usuário para a index.php com paramentro de sucesso
		header('location:index.php?msg=cadastrado');
	}
	else
	{
		// houve erro ao cadastrar filme
		header('location:index.php?msg=errocadastro');
	}
}
else // senão (tentou acessar a página diretamente pela URL)
{
	// neste caso, redirecionamos o usuário de volta para a página principal
	header('location:index.php?msg=formnecessario');
}

?>