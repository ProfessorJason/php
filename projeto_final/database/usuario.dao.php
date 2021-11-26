<?php  
// função para buscar um usuário no banco de dados
function buscar_usuario($usuario, $senha)
{
	// incluir arquivo de cionexão
	include_once 'conn.php';

	// estabelecer uma conexão com o banco de dados
	$conn = conectar();

	// montar uma buscar na tabela usuarios_tb
	$sql = "SELECT * FROM usuarios_tb WHERE usuario = '$usuario' AND senha = '$senha' ";

	// executar o comando sql
	$result = mysqli_query($conn, $sql);

	// verificar o numero de linhas afetadas pelo comando sql
	if (mysqli_affected_rows($conn) > 0)
	{
		return true;
	}
	
	return false;
	
}


?>