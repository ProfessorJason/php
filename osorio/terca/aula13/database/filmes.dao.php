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
			$retorno .= "Ano: "    . $filme['ano']    . "<br><br>";

		}

		// retornamos o valor de $retorno
		return $retorno;
	}

	// se o valor rtetornado pelo select NÃO FOR UM OBJETO, significa que 
	// este retorno é inmválido

	return "Não há filmes para exibir...";

}



?>