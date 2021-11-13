<?php  
// incluir arquivo de config
include_once 'config.inc.php';

// criar função para conectar ao banco de dados
function conectar()
{
	// conectar com o banco de dados
	$conn = mysqli_connect(HOST, USERNAME, PASSWORD, DB_NAME);

	return $conn;
}


// criar uma função para inserir um novo carro na tabela
function salvar_carro($carro)
{
	// estabelecer uma conexão com o db
	$conn = conectar();

	// criar o comando sql para realiza rum insert
	$sql = "INSERT INTO " . CARROS_TB . " (" . MARCA . ", " 
	. MODELO . ", "
	. ANO . ") VALUES ('"
	.$carro['marca'] .  "', '"
	.$carro['modelo'] . "', "
	.$carro['ano'] . ")";

	// executar o comando sql (insert)
	$result = mysqli_query($conn, $sql);
	/*
	OBS: a função mysqli_query retorna true (para comandos executados corretamente) ou false (para comandos executados errôneamente) para DML INSERT, UPDATE e DELETE

	Para DML SELECT a função retorna null, quando não há dados para retornar ou o comando está errado, ou o conjunto de dados obtidos através da consulta (ex: SELECT * FROM carros_tb, retornaria TODOS os dados de TODOS os carros da tabela)
	*/

	// retornar o valor de 'result'
	return $result;
}

// função para buscar todos os dados dos carros na tabela
function exibir_carros()
{
	$conn = conectar();

	$sql = "SELECT * FROM " . CARROS_TB;

	$result = mysqli_query($conn, $sql);

	return $result;
}

?>