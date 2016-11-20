<?php

class Luta {

	private $desafiado, $desafiante, $rounds, $aprovada;

	public function marcarLuta($lutador1, $lutador2) {
		if($lutador1->getCategoria() === $lutador2->getCategoria() && $lutador1 != $lutador2) {
			echo '<p>Luta marcada</p>';

			$this->aprovada = true;
			$this->desafiado = $lutador1;
			$this->desafiante = $lutador2;
		} else {

			echo '<p>Luta não marcada</p>';

			$this->aprovada = false;
			$this->desafiado = null;
			$this->desafiante = null;
		}

		return $this;
	}

	public function lutar() {
		if($this->aprovada) {

			$this->desafiado->apresentar();
			$this->desafiante->apresentar();

			$vencedor = rand(0,2);

			switch($vencedor) {
				case 0:
					echo '<p>A luta empatou</p>';
					$this->desafiado->empatar();
					$this->desafiante->empatar();
					break;
				case 1:
					echo '<p>Lutador '.$this->desafiado->getNome().' ganhou.</p>';
					$this->desafiado->ganhar();
					$this->desafiante->perder();
					break;
				case 2:
					echo '<p>Lutador '.$this->desafiante->getNome().' ganhou.</p>';
					$this->desafiado->perder();
					$this->desafiante->ganhar();
					break;
				default:
					echo '<p>Ninguem ganhou a luta</p>';
			}
		} else {
			echo '<p>Luta não pode acontecer</p>';
		}
	}


	public function getDesafiado() {
		return $this->desafiado;
	}

	public function setDesafiado($desafiado) {
		$this->desafiado = $desafiado;
	}

	public function getDesafiante() {
		return $this->desafiantes;
	}

	public function setDesafiante($desafiante) {
		$this->desafiantes = $desafiantes;
	}

	public function getRounds() {
		return $this->rounds;
	}

	public function setRounds($rounds) {
		$this->rounds = $rounds;
	}

	public function getAprovada() {
		return $this->aprovada;
	}

	public function setAprovada($aprovada) {
		$this->aprovada = $aprovada;
	}







}