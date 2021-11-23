<?php  // incluir arquivo de conexão
include_once 'conn.php';

// função para salvar um filme na tabela filmes_tb no bd
function salvar_filme($titulo, $genero, $ano)
{
	// conectar com o bd
	$conn = conectar();

	// criar uma sql insert para inserir um novo filme na tabela filmes_tb
	$sql = "INSERT INTO filmes_tb (titulo, genero, ano) 
	VALUES ('$titulo', '$genero', $ano)";

	// executar o comando sql
	$result = mysqli_query($conn, $sql);
	/* obs: Para os comandos DML INSERT, UPDATE e DELETE, a função mysqli_query 
	retorna TRUE quando consegue executar o	comando sql corretamente, e FALSE
	quando houver um problema em sua execução. */

	// RETORNAR o valor de $result
	return $result;
}

// função para retornar todos os filmes
function exibir_filmes()
{
	// estabelecer a conexão com o bd
	$conn = conectar();

	$sql = "SELECT * FROM filmes_tb";

	// executar o comando sql acima
	$result = mysqli_query($conn, $sql);
	/* obs: para comando DML SELECT, a função mysqli_query retorna um objeto
	(objeto = tipo de dado mais complexo) contendo todos os resultados do comando
	SELECT especificado quando o comando for bem-sussedito, ou null, quando o 
	comando não for bem-suceesdido. */

	// verificar se o retorno é válido
	if (is_object($result))
	{
		// criar uma string vazia para futuramente concatenar os dados
		// de todos os filmes retornados
		$retorno = "";

		while($filme = mysqli_fetch_assoc($result))
		{
			// ENQUANTO houver registros dentro de $result, transforme cada
			// registro (linha da tabel) em um array associativo:
			
			// concatenar para '$retorno' os valores deste array:

			$retorno .= "Título: " . $filme['titulo'] . "<br>";
			$retorno .= "Gênero: " . $filme['genero'] . "<br>";
			$retorno .= "Ano: "    . $filme['ano']    . "<br>";
			$retorno .= link_deletar($filme['id_filme']) . " | ";
			$retorno .= link_editar($filme['id_filme']) . "<br><br>";

		}

		// retornamos o valor de $retorno
		return $retorno;
	}

	// se o valor rtetornado pelo select NÃO FOR UM OBJETO, significa que 
	// este retorno é inmválido

	return "Não há filmes para exibir...";

}

######################## AULA 14 ###########################

// função para montar o link para deletar filme
function link_deletar($id_filme)
{
	$link = '<a href="deletar.php?id_filme='.$id_filme.'" 
	onclick="return confirm(\'Tem certeza que deseja excluir este filme?\')">Deletar</a>';

	return $link;
}

// função para montar o link para editar o filme
function link_editar($id_filme)
{
	$link = '<a href="editar.php?id_filme='.$id_filme.'">Editar</a>';

	return $link;
}

// função para deletar um filme específico
function deletar_filme($id_filme)
{
	// estabelecer a conexão com o bd
	$conn = conectar();

	// criar o comando sql que irá deletar o filme da tabela de filmes
	$sql = "DELETE FROM filmes_tb WHERE id_filme = $id_filme";

	// executar o comando e guardar o retorno (que pode ser true ou false)
	$result = mysqli_query($conn, $sql);

	// verificar quantas linhas foram afetadas pelo comando sql acima
	if (mysqli_affected_rows($conn) > 0)
	{
		return $result; // retornar o valor de $result caso o comando nao altere nenhuam linha na tabela
	}

	// retornar false CASO o numero de linhas afetadas nao for maior que zero
	return false;
}

// função para retornar um filme para edição ou nulo, caso o id informado seja inválido
function buscar_filme($id_filme)
{
	$conn = conectar();

	$sql = "SELECT * FROM filmes_tb WHERE id_filme = $id_filme";

	$result = mysqli_query($conn, $sql);

	if (mysqli_affected_rows($conn) > 0)
	{
		return $result;
	}
	else
	{
		return false;
	}
}

// função que irá editar os dados de um filme específico
function editar_filme($id_filme, $titulo, $genero, $ano)
{
	$conn = conectar();

	$sql = "UPDATE filmes_tb SET titulo = '$titulo', genero = '$genero', ano = $ano WHERE id_filme = $id_filme";

	$result = mysqli_query($conn, $sql);

	return $result;
}

?>