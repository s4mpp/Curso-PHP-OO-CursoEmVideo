<?php

class Lutador {

	private $nome;
	private $nacionalidade;
	private $idade;
	private $altura;
	private $peso;
	private $categoria;
	private $vitorias;
	private $derrotas;
	private $empates;

	public function __construct($nome, $nacionalidade, $idade, $altura, $peso, $vitorias = 0, $derrotas = 0, $empates = 0) {

		$this->setNome($nome);
		$this->setNacionalidade($nacionalidade);
		$this->setIdade($idade);
		$this->setAltura($altura);
		$this->setPeso($peso);
		$this->setVitorias($vitorias);
		$this->setDerrotas($derrotas);
		$this->setEmpates($empates);
	}

	public function apresentar() {
		echo '<p>---------------------------------------------------</p>';
		echo '<p>Nome: '. $this->getNome() . '</p>';
		echo '<p>Nacionalidade: '. $this->getNacionalidade() . '</p>';
		echo '<p>Idade: '. $this->getIdade() . '</p>';
		echo '<p>Peso: '. $this->getPeso() . '</p>';
		echo '<p>Altura: '. $this->getAltura() . '</p>';
		echo '<p>Categoria: '. $this->getCategoria() . '</p>';
		echo '<p>Vitorias: '. $this->getVitorias() . '</p>';
		echo '<p>Derrotas: '. $this->getDerrotas() . '</p>';
		echo '<p>Empates: '. $this->getEmpates() . '</p>';
	}

	public function status() {
		$this->apresentar();
	}

	public function ganhar() {
		$this->setVitorias($this->getVitorias() + 1);
	}

	public function perder() {
		$this->setDerrotas($this->getDerrotas() + 1);
	}

	public function empatar() {
		$this->setEmpates($this->getEmpates() + 1);
	}

	private function getNome() {
		return $this->nome;
	}



	private function getNacionalidade() {
		return $this->nacionalidade;
	}



	private function getIdade() {
		return $this->idade;
	}



	private function getAltura() {
		return $this->altura;
	}



	private function getPeso() {
		return $this->peso;
	}



	private function getCategoria() {
		return $this->categoria;
	}



	private function getVitorias() {
		return $this->vitorias;
	}



	private function getDerrotas() {
		return $this->derrotas;
	}



	private function getEmpates() {
		return $this->empates;
	}


	private function setNome($nome) {
		$this->nome = $nome;
	}


	private function setNacionalidade($nacionalidade) {
		$this->nacionalidade = $nacionalidade;
	}

			

	private function setIdade($idade) {
		$this->idade = $idade;
	}

			

	private function setAltura($altura) {
		$this->altura = $altura;
	}

			

	private function setPeso($peso) {
		$this->peso = $peso;

		$this->setCategoria();
	}

			

	private function setCategoria() {
		if($this->peso < 52.2 && $this->peso > 120.2) {
			$this->categoria = 'Inválido';
		} elseif($this->peso <= 70.3) {
			$this->categoria = 'Leve';
		} elseif($this->peso <= 83.9) {
			$this->categoria = 'Médio';
		} elseif($this->peso <= 120.2) {
			$this->categoria = 'Pesado';
		}
	}

			

	private function setVitorias($vitorias) {
		$this->vitorias = $vitorias;
	}

			

	private function setDerrotas($derrotas) {
		$this->derrotas = $derrotas;
	}

			

	private function setEmpates($empates) {
		$this->empates = $empates;
	}


}
