<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Curso PHP OO</title>
</head>
<body>
	<?php 

		require_once 'Caneta.php';

		$c1 = new Caneta('BIC', 'Azul', 0.8);


		echo "<p>Eu tenho uma caneta {$c1->getModelo()} de ponta {$c1->getPonta()}</p>";

		var_dump($c1);

	?>
</body>
</html>

