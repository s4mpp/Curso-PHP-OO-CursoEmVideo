<?php

include_once 'Controlador.php';

class ControleRemoto implements Controlador {

	private $volume;
	private $ligado;
	private $tocando;

	function __construct() {
		$this->volume = 50;
		$this->ligado = false;
		$this->tocando = false;
	}

	function ligar() {
		$this->setLigado(true);
	}

	public function desligar() {
		$this->setLigado(false);
	}

	public function abrirMenu() {
		echo '<p> Esta ligado? '; echo  ($this->getLigado()) ? 'Sim' : 'Não' .'</p>';
		echo '<p> Esta tocando? '; echo ($this->getTocando()) ? 'Sim' : 'Não' .'</p>';
		echo '<p> Volume: '; for($i=0; $i <= $this->getVolume(); $i+= 10) {echo '|';}; echo '</p>';
	}
	
	public function fecharMenu() {
		echo '<p>Fechando menu..</p>';
	}

	public function maisVolume() {
		if($this->getLigado()) {
			$this->setVolume($this->getVolume() + 5);
		}
	}

	public function menosVolume() {
		if($this->getLigado()) {
			$this->setVolume($this->getVolume() - 5);
		}
	}

	public function ligarMudo() {
		if($this->getLigado() && $this->getVolume == 10) {
			$this->setVolume(0);
		}
	}

	public function desligarMudo() {
		if($this->getLigado() && $this->getVolume == 0) {
			$this->setVolume(50);
		}
	}

	public function play() {
		if($this->getLigado() && $this->getTocando()) {
			$this->setTocando(true);
		}
	}

	public function pause() {
		if($this->getLigado() && $this->getTocando()) {
			$this->setTocando(false);
		}
	}


	/**
	 * getters and setters
	 */

	private function getVolume(){
		return $this->volume;
	}
	
	private function setVolume($volume) {
		$this->volume = $volume;
	}

	private function getLigado(){
		return $this->ligado;
	}
	
	private function setLigado($ligado) {
		$this->ligado = $ligado;
	}

	private function getTocando(){
		return $this->tocando;
	}

	private function setTocando($tocando) {
		$this->tocando = $tocando;
	}

}
