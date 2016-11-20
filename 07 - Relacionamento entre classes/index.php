<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Curso PHP OO</title>
</head>
<body>
	<?php 

		include_once 'Lutador.php';

		$lutador[0] = new Lutador('Samuel Pacheco', 'Brasileiro', 24, 1.78, 62.5);
		$lutador[0]->apresentar();

		$lutador[0]->ganhar();

		$lutador[0]->status();

	?>
</body>
</html>

