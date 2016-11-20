<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Curso PHP OO</title>
</head>
<body>
	<?php 

		include_once 'ControleRemoto.php';

		$control = new ControleRemoto();

		$control->ligar();

		$control->play();
		$control->pause();
		$control->maisVolume();

		$control->abrirMenu();

		var_dump($control);

	?>
</body>
</html>

