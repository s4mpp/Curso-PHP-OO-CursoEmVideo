<?php

class Conta {

	public $num;
	protected $tipo;
	private $cliente;
	private $saldo;
	private $status;

	public function abrir($tipo) {

		if($tipo != 'cc' && $tipo != 'cp') {
			echo '<p>Conta inválida.</p>';
		} else {

			$this->setTipo($tipo);
			$this->setStatus(true);
			if($tipo == 'cc') {
				$this->setSaldo(50);
			} else {
				$this->setSaldo(150);
			}

			echo '<p>Conta criada com sucesso.</p>';
		}
	}

	public function fechar() {
		if($this->getSaldo() > 0) {
			echo '<p>Conta ainda tem dinheiro, não posso fechá-la.</p>';
		} elseif($this->getSaldo() < 0) {
			echo '<p>Conta em débito. Impossível fechar.</p>';
		} else {
			$this->setStatus(false);
			echo '<p>Conta fechada com sucesso.</p>';
		}
	}

	public function depositar($valor) {
		if($this->getStatus()) {
			$this->setSaldo($this->getSaldo() + $valor);
			echo '<p>Deposito de '.$valor.' efetuado com sucesso. Novo saldo: '.$this->getSaldo().'</p>';
		} else {
			echo '<p>Não é possivel depositar pois a conta está fechada.</p>';
		}
	}

	public function sacar($valor) {
		if($this->getStatus()) {
			if(($this->getSaldo() - $valor) >= 0) {
				$this->setSaldo($this->getSaldo() - $valor);
				echo '<p>Saque de '.$valor.' efetuado com sucesso. Novo saldo: '.$this->getSaldo().'</p>';
			} else {
				echo '<p>Saldo insuficiente para saque.</p>';
			}
		} else {
			echo '<p>Conta inativa. Não é possivel sacar.</p>';
		}
	}


	public function pagMensalidade() {
		if($this->getTipo() == 'cc') {
			$valor = 12;
		} elseif($this->getTipo() == 'cp') {
			$valor = 20;
		}
		if($this->getStatus()) {
			$this->setSaldo($this->getSaldo() - $valor);
			echo '<p>Pagamento de '.$valor.' efetuado com sucesso. Novo saldo: '.$this->getSaldo().'</p>';
		} else {
			echo '<p>Conta inativa. Não é possivel pagar.</p>';
		}
	}

	public function getNum() {
		return $this->num;
	}

	public function setNum($num) {
		$this->num = $num;
	}

	public function getTipo() {
		return $this->tipo;
	}

	public function setTipo($tipo) {
		$this->tipo = $tipo;
	}

	public function getCliente() {
		return $this->cliente;
	}

	public function setCliente($cliente) {
		$this->cliente = $cliente;
	}

	public function getSaldo() {
		return $this->saldo;
	}

	public function setSaldo($saldo) {
		$this->saldo = $saldo;
	}

	public function getStatus() {
		return $this->status;
	}

	public function setStatus($status) {
		$this->status = $status;
	}


}