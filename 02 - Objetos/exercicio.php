<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Curso PHP OO</title>
</head>
<body>
	<?php 

		require_once 'Carro.php';

		$car = new Carro();
		$car->cor = 'Preto';
		$car->modelo = 'Gol';

		$car->ligar();
		$car->desligar();

		$car->andar();
		$car->parar();
		$car->andar();
		$car->ligar();
		$car->andar();
		$car->desligar();
		$car->parar();
		$car->desligar();

		var_dump($car);

	?>
</body>
</html>

