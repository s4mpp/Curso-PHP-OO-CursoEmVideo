<?php 


class Carro {
	var $cor;
	var $modelo;
	var $velocidade = 0;
	var $ligado = false;

	function ligar() {
		if($this->velocidade > 0) {
			echo '<p>Já estou ligado.</p>';
		} else{
			$this->ligado = true;
		}
	}

	function desligar() {
		if($this->velocidade > 0) {
			echo '<p>Não posso desligar pois estou andando</p>';
		} else{
			$this->ligado = false;
		}
	}

	function andar() {
		if($this->ligado) {
			echo '<p>Estou andando..</p>';
			$this->velocidade = 10;
		} else {
			echo 'Estou desligado';
		}
	}

	function parar() {
		if($this->ligado && $this->velocidade > 0) {
			$this->velocidade = 0;
			echo '<p>Parei.</p>';
		} else {
			echo '<p>Já estou parado.</p>';
		}
	}
}