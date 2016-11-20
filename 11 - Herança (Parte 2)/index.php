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

		require_once 'Pessoa.php';
		require_once 'Visitante.php';
		require_once 'Aluno.php';
		require_once 'Bolsista.php';
		require_once 'Tecnico.php';
		require_once 'Professor.php';

		$a1 = new Aluno();
		$a1->setNome('Pedro');
		$a1->setMatricula(4648);
		$a1->setIdade(16);
		$a1->setSexo('Masculino');
		$a1->setCurso('Informática');
		$a1->pagarMensalidade();


		$b1 = new Bolsista();
		$b1->setNome('Samuel');
		$b1->setMatricula(135);
		$b1->setBolsa(1111);
		$b1->setCurso('Adm');
		$b1->pagarMensalidade();

		$p1 = new Professor();
		$p1->setNome('Gustavo');
		$p1->setSalario(5000);
		$p1->receberAumento(2000);

		$t1 = new Tecnico();
		$t1->setNome('Teste');
		$t1->praticar();
		$t1->setRegistroProfissional('2342-3');

		var_dump($a1);
		var_dump($b1);
		var_dump($p1);
		var_dump($t1);

	?>
</body>
</html>

