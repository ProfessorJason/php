<?php  

// função que irá receber um argumento e, deopendendo do valor deste argumento , a função irá retornar alguma mensagem
function validar_dados($arg)
{
	// verificar valor de $arg (valor qeu recebemos nesta função)
	if ($arg == 'necessario')
	{
		// devolver para o local onde a função foi chamada a mensagem abaixo:
		return 'ATENÇÃO: Necessário realizar login!';
	}
	else if ($arg == 'embranco')
	{
		return 'ATENÇÃO: Preencha todos os campos!';
	}
	else if ($arg == 'invalido')
	{
		return 'ATENÇÃO: Usuário ou senha inválidos!';
	}

	return '';
}


?>