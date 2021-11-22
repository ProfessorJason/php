<?php  
// incluir arquivo de configuração
include_once 'config.inc.php';

// função para conectar com o banco de dados
function conectar()
{
	$conexao = mysqli_connect(HOST, USERNAME, PASSWORD, DBNAME);
	// a função mysqli_connect retorna um objeto de conexao com o banco de dados
	// caso a conexão seja bem-sucedida, ou, null, se a conexão não for 
	// bem-sucedida

	return $conexao;
}

// função para inserir roupa na tabela roupas_tb
function salvar_roupa($tipo, $tamanho, $cor)
{
	// conectar com o banco de dados
	$conexao = conectar();

	// configurar o comando sql que desejamos executar (INSERT)
	$sql = "INSERT INTO roupas_tb (tipo, tamanho, cor) 
	VALUES ('$tipo', '$tamanho', '$cor')";

	// executar o comando sql e armazenar o retorno dele em $result
	$result = mysqli_query($conexao, $sql);
	// pra comandos INSERT, UPDATE e DELETE, mysqli_query retorna true,
	// para comandos executados corretamente, ou false, para comandos 
	// que não foram executados corretamente (provavelmene devido a erros
	// no SQL, ou na conexão com o banco)

	// retornar o valor de $result
	return $result;
}


// função que busca todos os registros dentro da tavela roupas_tb
function buscar_roupas()
{
	$conexao = conectar();

	// Buscar TODOS os dados de TODOS os registros
	$sql = "SELECT * FROM roupas_tb";

	// executar o comando e armazenar o retorno
	$result = mysqli_query($conexao, $sql);
	// para comando SELECT, a função mysqli_query irá retornar um objeto do tipo
	// mysqli_result (este objeto pode estar vazio, caso o comando NÃO retorne 
	// valores válidos, ou conterá todos os dados solicitados pelo select)

	// vamos retornar o objeto APENAS se houver AO MENOS UM registro dentro da 
	// tabela roupas_tb. Caso contrário, retornaremos 'NULL'

	// verificar quanta slinhas foram afetadas no banco de dados pelo ULTIMO 
	// comando sql execurado no bd selecionado
	if (mysqli_affected_rows($conexao) > 0)
	{
		return $result;
	}
	else
	{
		return null;
	}

}

// função para exibir as roupas cadastradas
function exibir_roupas()
{
	// aramzenar o retorno da função buscar_roupas
	$result = buscar_roupas();

	// verificar o retorno

	// se for nulo, retornamos uma mensagem de 'dados em branco'
	if ($result == null)
	{
		return '<h3>Não há roupas cadastradas ainda...</h3>';
	}
	else
	{

		$retorno = ''; // incializa 'retorno' com uma string em branco

		// enquanto houverem registros dentro de '$result',
		// a cada passagem do laço, transforme o registro atual em um array
		// associativo chamado 'roupa_atual'
		while($roupa_atual = mysqli_fetch_assoc($result))
		{
			$retorno .= "Tipo: " 	. $roupa_atual['tipo'] 		. "<br>";
			$retorno .= "Tamanho: " . $roupa_atual['tamanho'] 	. "<br>";
			$retorno .= "Cor: " 	. $roupa_atual['cor'] 		. "<br>";
			$retorno .= link_deletar($roupa_atual['id_roupa']) . " | ";
			$retorno .= link_editar($roupa_atual['id_roupa']);
			$retorno .= "<br><br>";
		}

		// retornar o 'retorno' confogurado
		return $retorno;

	}
}

// função para deletar roupa
function deletar_roupa($id_roupa)
{
	$conexao = conectar();

	$sql = "DELETE FROM roupas_tb WHERE id_roupa = $id_roupa";

	$result = mysqli_query($conexao, $sql);

	return $result;
}

// função para montar o link de excluão
function link_deletar($id_roupa)
{

	$confirmacao = ' onclick="return confirm(\'Tem certeza que deseja excluir?\')"';
	$link = '<a href="deletar.php?id_roupa='.$id_roupa. '"' .$confirmacao. '>Deletar</a>';

	return $link;
}

// função para montar link de edição
function link_editar($id_roupa)
{
	$link = '<a href="editar.php?id_roupa='.$id_roupa. '">Editar</a>';

	return $link;
}

// função para editar
function editar_roupa($id_roupa, $tipo, $tamanho, $cor)
{
	$conexao = conectar();

	$sql = "UPDATE roupas_tb SET tipo = '$tipo', tamanho = '$tamanho', cor = '$cor' 
	WHERE id_roupa = $id_roupa";

	$result = mysqli_query($conexao, $sql);

	return $result;
}

//função para buscar uma roupa específica
function buscar_roupa($id_roupa)
{
	$conexao = conectar();

	$sql = "SELECT * FROM roupas_tb WHERE id_roupa = $id_roupa";

	$result = mysqli_query($conexao, $sql);

	if (mysqli_affected_rows($conexao) > 0)
	{
		
		
		return $result;
	}
	else
	{
		return null;
	}
}

?>