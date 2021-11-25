<?php  
// função para validar parametro msg
function validar_msg($msg)
{
	// verificar valor de msg
	switch ($msg) 
	{
		case 'necessario':
			$retorno = "<h3>Preenchimento do formulário obrigatório!</h3>";
			break;

		case 'cadastrado':
			$retorno = "<h3>Prato cadastrado com sucesso!</h3>";
			break;

		case 'errocadastro':
			$retorno = "<h3>Erro ao cadastrar prato. Tente novamente...</h3>";
			break;

		case 'idinvalido':
			$retorno = '<h3>Atenção: id inválido! Realize novamente a operação...</h3>';
			break;

		case 'pratodeletado':
			$retorno = '<h3>Prato excluído com sucesso!</h3>';
			break;

		case 'errodeletar':
			$retorno = '<h3>Erro ao excluir prato. Tente novamente</h3>';
			break;

		case 'pratoeditado':
			$retorno = '<h3>Dados do prato alterados com sucesso!</h3>';
			break;

		case 'erroeditado':
			$retorno = '<h3>Erro ao alterar dados do prato. Tente novamente</h3>';
			break;
		
		default:
			$retorno = '';
			break;
	}

	return $retorno;

}
?>