<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Curso PHP OO</title>
</head>
<body>
	<?php

		function p($text) {
			return '<p>'.$text.'</p>';
		}

		require_once 'Mamifero.php';
		require_once 'Reptil.php';
		require_once 'Peixe.php';
		require_once 'Ave.php';
		require_once 'Canguru.php';
		require_once 'Cachorro.php';
		require_once 'Cobra.php';
		require_once 'Tartaruga.php';
		require_once 'Goldfish.php';
		require_once 'Arara.php';

		$m = new Mamifero();
		$a = new Arara();
		$r = new Reptil();
		$c = new Canguru();
		$k = new Cachorro();
		$t = new Tartaruga();

		echo p(str_pad('LOCOMOVENDO', 50, '-', STR_PAD_BOTH));
		$m->locomover();
		$c->locomover();
		$k->locomover();
		$t->locomover();

		echo p(str_pad('EMITINDO SOM', 50, '-', STR_PAD_BOTH));
		$m->emitirSom();
		$k->emitirSom();
		$c->emitirSom();

	?>
</body>
</html>