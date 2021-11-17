<?php  
// arquivo com funções gerais / uteis do sistema

function validar_msg($msg)
{
	switch($msg) // verificar vaalor de msg
	{
		case 'formnecessario':
			$retorno = '<h3>Preencha o formulário para realizar um cadastro</h3>';
			break;

		case 'cadastrado':
			$retorno = '<h3>Filme cadastrado com sucesso!</h3>';
			break;

		case 'errocadastro':
			$retorno = '<h3>Erro ao cadastrar filme. Tente novamente mais tarde...</h3>';
			break;

		default: // se não for nenhum dos valores acima
			$retorno = ''; // guardamos string em branco na variável 'retorno'
			break;
	}

	return $retorno;
}


?>