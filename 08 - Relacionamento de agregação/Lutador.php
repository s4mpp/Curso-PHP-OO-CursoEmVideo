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

	public function getNome() {
		return $this->nome;
	}



	public function getNacionalidade() {
		return $this->nacionalidade;
	}



	public function getIdade() {
		return $this->idade;
	}



	public function getAltura() {
		return $this->altura;
	}



	public function getPeso() {
		return $this->peso;
	}



	public function getCategoria() {
		return $this->categoria;
	}



	public function getVitorias() {
		return $this->vitorias;
	}



	public function getDerrotas() {
		return $this->derrotas;
	}



	public function getEmpates() {
		return $this->empates;
	}


	public function setNome($nome) {
		$this->nome = $nome;
	}


	public function setNacionalidade($nacionalidade) {
		$this->nacionalidade = $nacionalidade;
	}

			

	public function setIdade($idade) {
		$this->idade = $idade;
	}

			

	public function setAltura($altura) {
		$this->altura = $altura;
	}

			

	public function setPeso($peso) {
		$this->peso = $peso;

		$this->setCategoria();
	}

			

	public function setCategoria() {
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

			

	public function setVitorias($vitorias) {
		$this->vitorias = $vitorias;
	}

			

	public function setDerrotas($derrotas) {
		$this->derrotas = $derrotas;
	}

			

	public function setEmpates($empates) {
		$this->empates = $empates;
	}


}
