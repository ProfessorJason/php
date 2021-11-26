<?php  
// função para validar o parametro msg
function validar_msg($msg)
{
	switch ($msg) 
	{
		case 'cadastrado':
			$retorno = '<h4>Jogo cadastrado com sucesso!</h4>';
			break;

		case 'erro_ao_cadastrar':
			$retorno = '<h4>Erro ao cadastrar jogo. Tente novamente mais tarde...</h4>';
			break;

		case 'preencha_o_form':
			$retorno = '<h4>ATENÇÃO: Preencha todos os campos!</h4>';
			break;

		case 'id_invalido':
			$retorno = '<h4>ATENÇÃO: jogo não localizado. Repita a operação</h4>';
			break;

		case 'jogo_deletado':
			$retorno = '<h4>Jogo excluído com sucesso!</h4>';
			break;

		case 'erro_deletar':
			$retorno = '<h4>Erro ao excluir jogo. Tente novamente mais tarde...</h4>';
			break;

		case 'erro_editar':
			$retorno = '<h4>Eror ao alterar dados do jogo. Tente novamente mais tarde...</h4>';
			break;

		case 'jogo_editado':
			$retorno = '<h4>Dados do jogo alterados com sucesso!</h4>';
			break;
		
		default:
			$retorno = '';
			break;
	}

	return $retorno;
}


?>