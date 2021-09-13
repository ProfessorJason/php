<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>Aula 05 - Classificação de Mamíferos</title>
	<link rel="stylesheet" type="text/css" href="../css/estilo.css">
</head>
<body>

	<h1>Responda as perguntas abaixo para determinar o mamífero:</h1>

	<form action="index.php" method="post">
		
		<p>
			<label>O animal é quadrúpde?:</label> 
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
			<label>O animal é bípede?</label>
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


		<button type="submit" name="verificar">Verificar</button>
		

	</form>

	<?php  


	if (isset($_POST['verificar']))
	{

		$p1 = $_POST['p1'];
		$p2 = $_POST['p2'];
		$p3 = $_POST['p3'];
		$p4 = $_POST['p4'];
		$p5 = $_POST['p5'];

		// o animal é quadrupde?
		if ($p1 == 1) // sim
		{
			// é carnívoro?
			if ($p2 == 1)
			{ // sim
				$animal = "leão";
			}
			else  // não é carnívoro
			{
				$animal = "cavalo";
			}
		}
		else // senão (resposta = NãO (2) )
		{
			//o animal é bípede?
			if ($p3 == 1)
			{// sim
				
				// o animal é onívoro?
				if ($p4 == 1)
				{ // sim
					$animal = "homem";
				}
				else // não é onívoro
				{
					$animal = "macaco";
				}

			}
			else // não é bipede
			{
				// o animal é voador?
				if ($p5 == 1)
				{ // sim
					$animal = "morcego";
				}
				else // não é voador
				{
					$animal = "baleia";
				}
			}
		}

		echo "<h4>Pelas caracteristicas apontadas, considerando apenas as respostas 
		pertinentes, o animal apontado é um $animal</h4>";
		
	}


	?>


</body>
</html>