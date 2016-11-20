<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Curso PHP OO</title>
</head>
<body>
	<?php 

		require_once 'Luta.php';
		require_once 'Lutador.php';

		$lutador[0] = new Lutador('Samuel', 'Brasil', 24, 1.78, 62.5, 0, 0, 0);
		$lutador[1] = new Lutador('Teste', 'França', 29, 1.88, 67.5, 0, 0, 0);


		$luta = new Luta();


		$luta->marcarLuta($lutador[0], $lutador[1])->lutar();


		var_dump($luta);
		var_dump($lutador);

	?>
</body>
</html>

