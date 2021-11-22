<?php  
// função para validar o parametro msg enviado via get
function validar_msg($msg)
{
	switch ($msg) 
	{
		case 'cadNecessario':
			return '<h3>Preencha o formulário para cadastrar uma nova roupa</h3>';
			break;

		case 'roupaCadastrada':
			return '<h3>Roupa cadastrada com sucesso!</h3>';
			break;

		case 'erroCadastro':
			return '<h3>Erro ao cadastrar roupa...</h3>';
			break;

		case 'idInvalido':
			return '<h3>Impossível excluir. Tente novamente.</h3>';
			break;

		case 'idInvalidoEdt':
			return '<h3>Impossível editar. Tente novamente.</h3>';
			break;

		case 'roupaExcluida':
			return '<h3>Roupa excluída com sucesso!</h3>';
			break;

		case 'erroExcluir':
			return '<h3>Erro ao excluir roupa...</h3>';
			break;

		case 'erroEditar':
			return '<h3>Erro ao editar roupa. Tente novamente.</h3>';
			break;

		case 'roupaEditada':
			return '<h3>Alterações salvas com sucesso!</h3>';
			break;

		default:
			return '';
			break;
	}
}




?>