<?php  
// incluir arq de configuração com as constantes
include_once 'config.inc.php'; 

// função para conectar com o bd
function conectar()
{
	// o PHP irá TENTAR realizar uma conexão com o bd abaixo
	// Caso não consiga, ele irá reotrnar 'falso' e mostrar um erro
	// na tela
	$conexao = mysqli_connect(HOST, USERNAME, PASSWORD, DBNAME);

	// retornamos a conexão válida.
	return $conexao;
}

// função para inserir um novo prato na tabela 'pratos_tb'
function salvar_prato($nome, $tipo, $valor)
{
	// estabelecer uma conexão o bd
	$conexao = conectar();

	// criar o comando INSERT
	$sql = "INSERT INTO pratos_tb (nome, tipo, valor) 
	VALUES ('$nome', '$tipo', $valor)";

	// executar o comando sql
	$result = mysqli_query($conexao, $sql);
	// OBS: para comandos INSERT, UPDATE e DELETE, a função acima 
	// retorna 'true', quando o comando é executado corretametante, 
	// ou 'false', quando houver algum problema em sua execução

	// retornar o valor armazenado em 'result'
	return $result;
}


// função para retornar todos os pratos
function buscar_todos()
{
	$conexao = conectar();

	$sql = "SELECT * FROM pratos_tb";

	$result = mysqli_query($conexao, $sql);
	// OBS: para o comando SELECT, a função acima retorna um objeto
	// contendo TODOS os dados de TODOS os registros (afinal, foi
	// um SELECT *), se o comando for executado corretamente, ou
	// null, se houver erro no sql ou não houver nada na tabela


	// verificar numero de linhas afetadas pelo SELECT
	if (mysqli_affected_rows($conexao) > 0) // se trouxe mais de um resultado na busca
	{
		return $result; // retorna o objeto contendo os dados da busca
	}
	else // senão
	{
		return null; // retorna nulo, pois ou o select está errado, ou
		// não há nada para exibir (tabela vazia)
	}

	
}

// função para converter o retorno da busca num array
function exibir_pratos()
{
	$result = buscar_todos(); // chama func que tenta buscar 
	// todos os pratos da tabela pratos_tb

	// verificar se este retorno é válido!
	if ($result != null)
	{
		
		$formatado = ''; // declara a variável como string vazia

		// converter os dados deste objeto em um array associativo
		while($prato = mysqli_fetch_assoc($result))
		{
			$formatado .= "ID #: " 		. $prato['id_prato'] . "<br>";
			$formatado .= "Prato: " 	. $prato['nome']  . "<br>";
			$formatado .= "Tipo: " 		. $prato['tipo']  . "<br>";
			$formatado .= "Valor R$: "  . $prato['valor'] . "<br><br>";
		}

		// retornar a string formatada
		return $formatado;

	}
	else // o  retorno da busca não é válida
	{
		return '<h3>Não há pratos para exibir</h3>';
	}

}


?>