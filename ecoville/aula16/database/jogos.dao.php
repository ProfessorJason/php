<?php  
include_once 'config.inc.php';

// função para conectar com o banco de dados
function conectar()
{
	// retornando uma conexão com o banco
	return mysqli_connect(HOST, USERNAME, PASSWORD, DBNAME);
}

// função para salvar um jogo na tabela jogos_tb
function salvar_jogo($titulo, $genero, $ano)
{
	// conectar com o banco de dados desejado
	$conexao = conectar();

	// criar o comando SQL para inserir um jogo na tabela jogos_tb
	$sql = "INSERT INTO jogos_tb (titulo, genero, ano) 
	VALUES ('$titulo', '$genero', $ano)";

	// executar o comando sql
	$result = mysqli_query($conexao, $sql);
	// Para comandos INSERT, UPDATE e DELETE, a função mysqli_query retorna
	// true, quando o comando é executado corretamente, ou false, quando há erro
	// no comando

	// retornar o valor de $result (true ou false)
	return $result;
}

// função para buscar todos os jogos da tabela jogos_tb
function buscar_todos()
{
	$conexao = conectar();

	// buscar todos os dados de todos os registros da tabela jogos_tb
	$sql = "SELECT * FROM jogos_tb";

	// executar comando e guardar o resultado na variável $result
	$result = mysqli_query($conexao, $sql);

	// verificar se o comando retornou algo válido
	if (mysqli_affected_rows($conexao) > 0)
	{
		// comando foi executado corretamnete então simplemente retornamos os dados obtidos com este select
		return $result;
	}
	else if (mysqli_affected_rows($conexao) == 0)
	{
		// o comando foi executado corretamente, mas não há dados na tabela
		return false;
	}
	else
	{
		// retornar nulo, caso o comando sql esteja errado, ou haja algum problema com a conexão com o banco de dados
		return null;
	}

}

// função para transformar o retorno da busca (select *) numa string
function exibir_jogos()
{
	$result = buscar_todos(); // recebe o retorno desta função, que pode ser um objeto contendo os dados da busca, falso, ou nulo

	// verificar este retorno
	if ($result === null)
	{
		return "<h3>Problemas no SQL. Verifique sua conexão ou sua query</h3>";
	}
	else if (!$result)
	{
		return "<h3>Não há jogos cadastrados ainda!</h3>";
	}
	else
	{

		$retorno = '';

		// enquanto houver registro dentro de $result:
		// transforme cada linha de $result num array associativo
		while($jogo = mysqli_fetch_assoc($result))
		{
			$retorno .= "Título: " 			  . $jogo['titulo'] . "<br>";
			$retorno .= "Gênero: " 			  . $jogo['genero'] . "<br>";
			$retorno .= "Ano de lançamento: " . $jogo['ano'] 	. "<br>";

			$retorno .= link_deletar($jogo['id_jogo']) . " | ";
			$retorno .= link_editar($jogo['id_jogo'])  . "<br><br>";
		}

		return $retorno;

	}
		
}

// função para montar o link para deletar
function link_deletar($id_jogo)
{
	$link = '<a href="deletar.php?id_jogo='.$id_jogo.'" 
	onclick="return confirm(\'Tem certeza que deseja excluir este jogo?\')">Deletar</a>';

	return $link;
}

// função para montar o link para editar
function link_editar($id_jogo)
{
	$link = '<a href="editar.php?id_jogo='.$id_jogo.'">Editar</a>';
	return $link;
}

// função para deletar jogo do banco de dados
function deletar_jogo ($id_jogo)
{
	$conexao = conectar();

	$sql = "DELETE FROM jogos_tb WHERE id_jogo = $id_jogo";

	$result = mysqli_query($conexao, $sql);

	if(mysqli_affected_rows($conexao) > 0)
	{
		return true;
	}
	
	return false;
}

// função para buscar jogo especifico
function buscar_jogo($id_jogo)
{
	$conexao = conectar();

	$sql = "SELECT * FROM jogos_tb WHERE id_jogo = $id_jogo";

	$result = mysqli_query($conexao, $sql);

	if (mysqli_affected_rows($conexao) > 0)
	{
		return $result; // retorna o objeto contendo o jogo encontrado
	}

	return null; // não há nada para retornar
}

// função para atualizar os dados de um jogo específico
function editar_jogo($id_jogo, $titulo, $genero, $ano)
{
	$conexao = conectar();

	$sql = "UPDATE jogos_tb SET titulo = '$titulo', genero = '$genero', ano = $ano 
	WHERE id_jogo = $id_jogo";

	$result = mysqli_query($conexao, $sql);

	if (mysqli_affected_rows($conexao) > 0)
	{
		return true;
	}

	return false;
}


?>