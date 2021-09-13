<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>Determinar o Mamífero</title>
	<link rel="stylesheet" type="text/css" href="../css/estilo.css">
</head>
<body>

	<h1>Determinar qual o mamífero com base nas respostas das perguntas abaixo:</h1>

	<form action="index.php" method="post">

		<p>
			<label>O animal é um quadrúpde?</label> 
			<select name="p1">
				<option value="1">SIM</option>
				<option value="2">NÃO</option>
			</select>
		</p>
		
		<p>
			<label>O animal é carnívoro?</label> 
			<select name="p2">
				<option value="1">SIM</option>
				<option value="2">NÃO</option>
			</select>
		</p>

		<p>
			<label>O animal é um bípede?</label> 
			<select name="p3">
				<option value="1">SIM</option>
				<option value="2">NÃO</option>
			</select>
		</p>

		<p>
			<label>O animal é onívoro?</label> 
			<select name="p4">
				<option value="1">SIM</option>
				<option value="2">NÃO</option>
			</select>
		</p>

		<p>
			<label>O animal é voador?</label> 
			<select name="p5">
				<option value="1">SIM</option>
				<option value="2">NÃO</option>
			</select>
		</p>
		
		<p>
			<button type="submit" name="verificar">Verificar</button>
		</p>

	</form>

	<?php  

	if (isset($_POST['verificar']))
	{

		$p1 = $_POST['p1'];
		$p2 = $_POST['p2'];
		$p3 = $_POST['p3'];
		$p4 = $_POST['p4'];
		$p5 = $_POST['p5'];

		// é um quadrupe?
		if ($p1 == 1)
		{ // SIM

			// é carnívoro?
			if($p2 == 1)
			{ // sim
				$animal = "leão";
			}
			else // não é carnívoro
			{
				$animal = "cavalo";
			}

		}
		else // não é quadrúpde
		{
			// é bípede?
			if ($p3 == 1)
			{ // sim

				// é onívoro?
				if($p4 == 1)
				{ // sim
					$animal = "homem";
				}
				else // não é onívoro
				{
					$animal = "macaco";
				}
			}
			else // não é bípede
			{
				// é voador?
				if ($p5 == 1)
				{ // SIM
					$animal = "morcego";
				}
				else // não é voador
				{
					$animal = "baleia";
				}
			}
		}

		echo "<h3> O mamífero foi identificado como: $animal</h3>";

	}// fim do if 'isset'

	?>


</body>
</html>