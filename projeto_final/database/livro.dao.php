<?php  
include_once 'conn.php';

// função para salvar livro
function salvar_livro($titulo, $autor, $editora)
{
	$conn = conectar();

	$sql = "INSERT INTO livros_tb (titulo, autor, editora) 
	VALUES ('$titulo', '$autor', '$editora')";

	$result = mysqli_query($conn, $sql);

	if (mysqli_affected_rows($conn) > 0)
	{
		return true;
	}

	return false;
}

// função para buscar todos os livros
function buscar_livros()
{
	$conn = conectar();

	$sql = "SELECT * FROM livros_tb";

	$result = mysqli_query($conn, $sql);

	if (mysqli_affected_rows($conn) > 0)
	{
		return $result;
	}

	return null;
}

// função para exibir livros
function exibir_livros()
{
	$result = buscar_livros();

	// se o valor de result for nulo, retornamos uma mensagem de erro
	if ($result == null)
	{
		$retorno = '<h3>Não há livros cadastrados</h3>';
	}
	else // senão (há, ao menos, um livro para exibir)
	{
		$retorno = '<div class="col-6">';
		$retorno .= '<table class="table table-hover">';
		// montar a primeira linha da tablea
		$retorno .= '<tr>';
		$retorno .= '<th>ID #</th>'; // coluna de cabeçalho = th = table header
		$retorno .= '<th>Título</th>';
		$retorno .= '<th>Autor</th>';
		$retorno .= '<th>Editora</th>';
		$retorno .= '<th>Deletar</th>';
		$retorno .= '<th>Editar</th>';
		$retorno .= '</tr>';

		while ($livro = mysqli_fetch_assoc($result))
		{
			// dentro deste laço, montaremos novas linhas para a tabela:
			$retorno .= '<tr>';
			// coluna simples da tabela = td = table data
			$retorno .= "<td>" . $livro['id_livro'] . "</td>";
			$retorno .= "<td>" . $livro['titulo']   . "</td>";
			$retorno .= "<td>" . $livro['autor']    . "</td>";
			$retorno .= "<td>" . $livro['editora']  . "</td>";
			$retorno .= "<td>" . link_deletar($livro['id_livro']) . "</td>";
			$retorno .= "<td>" . link_editar($livro['id_livro'])  . "</td>";
			$retorno .= '</tr>'; // fim da linha da tabela
		}

		$retorno .= '</table>';
		$retorno .= '</div>';
	}

	return $retorno;
}

// função para montar o link de exclusão
function link_deletar($id_livro)
{
	$link = '<a href="deletar.php?id_livro='.$id_livro.'" 
	onclick="return confirm(\'Tem certeza que deseja excluir este livro?\')" class="btn btn-danger">Deletar</a>';

	return $link;
}

// função para montar o linl para editar
function link_editar($id_livro)
{
	$link = '<a href="editar.php?id_livro='.$id_livro.'" class="btn btn-warning">Editar</a>';
	return $link;
}

// função para deletar livro
function deletar_livro($id_livro)
{
	$conn = conectar();

	$sql = "DELETE FROM livros_tb WHERE id_livro = $id_livro";

	$result = mysqli_query($conn, $sql);

	if (mysqli_affected_rows($conn) > 0)
	{
		return true;
	}

	return false;
}

// função para buscar um livro específico
function buscar_livro($id_livro)
{
	$conn = conectar();

	$sql = "SELECT * FROM livros_tb WHERE id_livro = $id_livro";

	$result = mysqli_query($conn, $sql);

	if (mysqli_affected_rows($conn) > 0)
	{
		return $result;
	}

	return null;
}

// função para editar (atualizar) dados do livro
function editar_livro($id_livro, $titulo, $autor, $editora)
{
	$conn = conectar();

	$sql = "UPDATE livros_tb SET titulo = '$titulo', autor = '$autor', editora = '$editora' 
	WHERE id_livro = $id_livro";

	$result = mysqli_query($conn, $sql);

	if (mysqli_affected_rows($conn) > 0)
	{
		return true;
	}

	return false;
}

?>