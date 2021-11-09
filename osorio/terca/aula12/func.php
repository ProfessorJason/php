<?php  // arquivo com funções uteis para o sistema

function verificar_erro($erro)
{
	if ($erro == 'necessario')
	{
		return 'ATENÇÃO: Necessário preencher o formulário de login.';
	}
	else if ($erro == 'embranco')
	{
		return 'ATENÇÃO: Preencha todos os campos do formulário';
	}
	else if ($erro == 'invalido')
	{
		return 'ATENÇÃO: Usário ou senha incorretos!';
	}

	return '';
}


?>