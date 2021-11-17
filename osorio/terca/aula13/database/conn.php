<?php  include_once 'config.inc.php'; // incluir arquivo de config

function conectar() // função para conectar com o banco de dados abaixo:
{
	// TENTAR criar uma conexão com um bd
	$conn = mysqli_connect(HOST, USERNAME, PASSWORD, DBNAME);

	return $conn; // retornar a conexão ativa com bd
}
?>