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

		include_once 'iPublicacao.php';
		include_once 'Livro.php';
		include_once 'Pessoa.php';


		$leitor = new Pessoa('Mauricio', 23, 'Masculino');

		$leitor->fazerAniver();
		$leitor->fazerAniver();

		$livro = new Livro('PHP', 'Samuel Pacheco', 15, 10, true, $leitor);

		$livro->abrir();
		$livro->fechar();
		$livro->abrir();

		$livro->folhear(5);


		var_dump($leitor);
		var_dump($livro);

	?>
</body>
</html>

