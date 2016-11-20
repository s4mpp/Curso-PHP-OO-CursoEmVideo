<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Curso PHP OO</title>
</head>
<body>
	<?php 

		require_once 'Caneta.php';

		$c1 = new Caneta();
		$c1->cor = 'Azul';
		//$c1->ponta = 0.5;
		//$c1->carga = 99;

		$c1->rabiscar();
		$c1->tampar();
		$c1->destampar();

		var_dump($c1);

	?>
</body>
</html>

