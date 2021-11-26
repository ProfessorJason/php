<?php  
// função para validar o parametro msg enviado via get
function validar_msg($msg)
{
	switch ($msg) 
	{
		case 'cadastrado':
			$retorno = '<h3>Jogo cadastrado com sucesso!</h3>';
			break;

		case 'erro_ao_cadastrar':
			$retorno = '<h3>ERRO ao cadastrar jogo. Tente novamente mais tarde....</h3>';
			break;

		case 'preencha_o_form':
			$retorno = '<h3>ATENÇÃO: Preencha todos os dados para efetuar o cadastro!</h3>';
			break;

		case 'id_invalido':
			$retorno = '<h3>ATENÇÃO: Não foi possível realizar a operação: Id informado inválido!</h3>';
			break;

		case 'jogo_deletado':
			$retorno = '<h3>Jogo excluído com sucesso!</h3>';
			break;

		case 'erro_deletar':
			$retorno = '<h3>ERRO ao excluir jogo. Tente novamente mais tarde...</h3>';
			break;

		case 'preencha_o_formedt':
			$retorno = '<h3>ATENÇÃO: Preencha todos os dados para alterar os dados do jogo selecionado!</h3>';
			break;

		case 'jogo_editado':
			$retorno = '<h3>Dados do jogo selecionado alterados com sucesso!</h3>';
			break;

		case 'erro_editar':
			$retorno = '<h3>ERRO ao alterar dados do jogo. Tente novamente mais tarde...</h3>';
			break;
		
		default:
			$retorno = '';
			break;
	}

	return $retorno;
}

?>