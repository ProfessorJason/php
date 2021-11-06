<?php include_once 'functions.php'; ?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>Aula 14 - Exemplo Funções</title>
	<link rel="stylesheet" type="text/css" href="../css/estilo.css">
</head>
<body>

	<h1>Aula 14 - Exemplo de Funções</h1>

	<p>
		Os resultadios abaixo estão sendo executados a partir da chamada de funções do arquivo 'functions.php' que foi incluído neste arquivo 'index.php'
	</p>

	<h3>Apresentar resultado da soma entre 46 e 756</h3>

	<p>
		<?php somar(46, 756); ?>
	</p>

	<h3>Apresentar resultado da soma entre 10 e -78</h3>

	<p>
		<?php somar(10, -78); ?>
	</p>

	<h3>Apresentar mensagem de boa noite na tela</h3>

	<p>
		<?php boa_noite(); ?>
	</p>

	<h3>Apresentar mensagem dinâmica na tela</h3>

	<p>
		<?php exibir_msg("Primeira aula de funções! Yay! \o/") ?>
	</p>

	<h3>Apresentar resultado da multiplicação entre 3 e 69</h3>

	<p>
		<?php echo "Resultado: " . multiplicar(3, 69); ?>
	</p>

	<h3>Aprensetar resultado da multiplicação entre 10 e 55</h3>

	<p>
		<?php 
		$res = multiplicar(10, 55);
		echo "Resultado: $res";
		?>
	</p>

	<h3>Exemplo de chamada de função dentro de função:</h3>
	<h4>Somar 2 e 67; e 7 e 43; multiplicar o resultado dessas somas</h4>

	<p>
		<?php  

		$res = multiplicar( retornar_soma(2, 67), retornar_soma(7, 43) );
		echo "Resultado: $res";

		?>
	</p>

	<h3>Apresentar retorno da função 'bolinho'</h3>
	<p>
		<?php echo bolinho(); ?>
	</p>


</body>
</html>