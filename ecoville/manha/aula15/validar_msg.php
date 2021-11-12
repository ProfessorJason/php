<?php 

function validar_msg($msg)
{
	switch ($msg) 
	{

		case 'necessario':
			echo '<h4>ATENÇÃO: é necessáio preencher o formulário para salvar um contato</h4>';
			break;

		case 'embranco':
			echo '<h4>ATENÇÃO: Preencha todos os campos!</h4>';
			break;

		case 'salvo':
			echo '<h4>Contato salvo na agenda!</h4>';
			break;

		case 'errosalvar':
			echo 'ERRO: Não foi possível salvar su contaot na agenda. Tente novamente</h4>';
			break;		
	}
}

?>