<?php  

// funções de exemplo 
// função 'somar' recebe dois valores e mostra a soma entre eles na tela
function somar($a, $b) { 
	echo $a + $b;
}

// função 'bom_dia' não recebe valores mas mostra uma mensagem na tela
function bom_dia() {
	echo "<p>Bom dia!</p>";
}

// função 'subtrair' recebe dois valores e retorna (ou seja, devolve para
//  onde a função foi chamada no programa) a subtração do primeiro
// pelo segundo valor
function subtrair($a, $b)
{
	return $a - $b;
}

// abaixo: exemplo de utilização das funções:
/*
bom_dia();
echo "A soma de 15 + 2 = ";
somar(15, 2);

echo "<br>A subtração de 45 - 10 = " . subtrair(45, 10);
*/


##################################################################
// funções úteis do sistema

// função 'validar_login' irá checar o parâmetro get 'login'
function validar_login ($param)
{
	
	// checar valor de '$param'
	if ($param == 'invalido')
	{
		return 'Usuário ou senha inválidos!';
	}
	else if ($param == 'embranco')
	{
		return 'Preencha todos os campos do formulário!';
	}

	return ''; // retornar string vazia caso nenhum if acima seja 'true'
}


?>