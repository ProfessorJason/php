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
		return mysqli_query($conn, $sql);
		// acima a função irá retornar true, se executar o comando corretamente, ou false, se houver erro
		
	}

	// se o if acima resultar em FALSE, a linha abaixo obrigatoriamente será executada
	return false;	

}

// função para exibir dados de uma tabela
function buscar_contatos()
{
	// estabelecer uma conexão com o banco
	$conn = connect();
	// verificar se a conexão foi estabelecida
	if ($conn != null)
	{
		// se positivo, prosseguimos com o código
		$sql = "SELECT * FROM " . CONTATOS; // select all
		$result = mysqli_query($conn, $sql); // executa comando e armazena resultado

		// verificar se o numeor de linhas retornadas pelo SELECT é > 0
		if(mysqli_affected_rows($conn) > 0)
		{
			// se positivo, há ao menos um registro para ser exibido na tela
			return $result; // retona os resultados do select
		}
		else if (mysqli_affected_rows($conn) < 0)
		{ // se negativo, retorna mensagem de erro no select
			return "Erro ao buscar contatos:\n" . mysqli_error($conn);
		}
		else // se for 0, não há registros na tabela
		{
			return "Não há contatos salvos em sua agenda.";
		}

	}

	// se o if acima resultar em FALSE, a linha abaixo obrigatoriamente será executada
	return "ATENÇÃO: Erro ao conectar ao banco de dados!";	
}


?>