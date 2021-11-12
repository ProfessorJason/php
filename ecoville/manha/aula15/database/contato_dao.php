<?php  
// incluir configs de conexão com o bd e demais constantes
include_once 'config.php';

// função para conectar com o banco de dados
function connect()
{
	$conn = mysqli_connect(HOST, USERNAME, PASSWORD, DB_NAME);

	if (!$conn)
	{
		return null; // houve um problema com a conexão ao banco de dados
	}
	else
	{
		return $conn; // devolve conexão ativa com o banco de dados
	}

}

// função para inserir contato na tabela
function salvar_contato($nome, $fone, $email)
{
	// estabelecer uma conexão com o banco
	$conn = connect();
	// verificar se a conexão foi estabelecida
	if ($conn != null)
	{
		// se positivo, prosseguimos com o código

		// criar comando sql
		$sql = "INSERT INTO " . CONTATOS . " (" .
		NOME . ", " . FONE . ", " . EMAIL . ") " .
		"VALUES ('$nome', '$fone', '$email')";

		// executar o comando e verificar se foi bem-sucessido
		if (mysqli_query($conn, $sql))
		{
			return "Contato salvo com sucesso!";
		}
		else
		{
			return "Erro ao salvar contato:\n" . mysqli_error($conn);
		}

	}

	// se o if acima resultar em FALSE, a linha abaixo obrigatoriamente será executada
	return "ATENÇÃO: Erro ao conectar ao banco de dados!";	

}


?>