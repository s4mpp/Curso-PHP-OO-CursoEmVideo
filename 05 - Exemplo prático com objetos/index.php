<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Curso PHP OO</title>
</head>
<body>
	<?php 

		require_once 'Conta.php';

		$conta1 = new Conta(); //Jubileu
		$conta1->abrir('cc');
		$conta1->setCliente('Jubileu');
		$conta1->setNum('1111');

		$conta1->depositar(300);
		$conta1->pagMensalidade();
		$conta1->fechar();

		var_dump($conta1);

		//----------------------------------------------------------------
		
		$conta2 = new Conta(); //Creusa
		$conta2->abrir('cp');
		$conta2->setCliente('Creusa');
		$conta2->setNum('2222');
		$conta2->depositar(500);

		$conta2->sacar(100);
		$conta2->pagMensalidade();
		$conta2->sacar(1000);
		$conta2->fechar();
		$conta2->sacar(530);
		$conta2->fechar();
		$conta2->sacar(10);

		var_dump($conta2);


	?>
</body>
</html>

