<?php  
	
// função que irá receber dois valores, soma-los, e apresentar o resultado da soma na tela	
function somar($x, $y)
{
	$res = $x + $y;
	echo "Resultado: $x + $y = $res";
}

// função para mostrar uma mensagem na tela
function boa_noite() // não recebe nenhum argumento
{
	echo "Aula 14 de PHP. Boa noite!";
}

// função para mostrar mensagem na tela recebida via argumento
function exibir_msg($msg)
{
	echo "Mensagem: $msg";
}


// função para multiplicar dois valores e RETORNAR o resultado
function multiplicar($x, $y)
{
	$res = $x * $y;
	return $res;
}

// função somar que retorna o resultado da soma
function retornar_soma($x, $y)
{
	return $x + $y;
}

// função sem argumentos que retorna a string 'bolinho'
function bolinho()
{
	return "Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.";
}
?>



